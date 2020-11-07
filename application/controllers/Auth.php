<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('Auth_layout');
	}

	public function index($flag = "")
	{
		$redirect = $this->is_login();
		if($redirect != FALSE){
			redirect($redirect);
			die();
		}
		redirect(ENDPOINT_AUTH_SSO.'?app_code='.APP_CODE);
		die();
	}

	public function handleLogout()
	{
		$this->session->sess_destroy();
	}

	public function handleLogin()
	{
		//validate token with jwt decode
		if(AUTHORIZATION::checkToken()){
			$decodedToken = AUTHORIZATION::decodedToken();
			
			//add session tambahan disini
			//bisa sesuaikan dengan role user di masing-masing aplikasi
			$session = array(
				//di bawah ini session default yg tidak boleh dihapus.
				'sess_in' => true,
				// 'profile' => (array) $decodedToken->profile,
				'account' => (array) @$decodedToken->account,
				'endpoint_logout' => @$decodedToken->endpoint_logout,
				'endpoint_profile' => @$decodedToken->endpoint_profile,
				'access_token' => $this->input->get('Authorization'),
				//end default token

				//session dibawah hanya session tambahan dummy
				//bisa disesuaikan dengan role masing-masing aplikasi
				'id_group' => 1,
				'group' => [
					'id_group' => 1,
					'group' => 'admin',
					'desc' => 'Administrator',
					'type' => 1,
				]
			);
			//register session			
			$this->session->set_userdata($session);
			//redirect ke halaman dashboard
			//sesuaikan dengan role user
			$redirect = $this->is_login();
			redirect($redirect);
        }else{
			redirect(ENDPOINT_AUTH_SSO.'?app_code='.APP_CODE);
		}
		die();
	}

	private function is_login()
	{
		if($this->session->userdata('sess_in')) {
			//disini buat redirect 
			//sesuai level user yg ada di role akses db masing-masing aplikasi
			return site_url('admin/dashboard'); //ini hanya contoh : dialihkan ke halaman dashboard admin
		}else{
			return false;
		}
	}

	public function logout()
	{
		$endpoint_logout = $this->session->userdata('endpoint_logout');//endpoint logout on sso
		$this->session->sess_destroy();
		redirect($endpoint_logout);
	}

}
