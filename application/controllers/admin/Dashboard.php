<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('Panel_layout');
		if(check_session('admin') == false){
			redirect('auth');
			die();
		}
	}

	public function index()
	{
		echo "<h1>Ini adalah demo halaman Login SIAKAD </h1> Detail pengguna yang login : <br/> ";
		echo json_encode($this->session->userdata());

		echo "<h2>Link eksternal :</h2><br/>";
		echo "<a href='".$this->session->userdata('endpoint_profile')."'>Kelola Profil</a> <br/>";
		echo "<a href='".$this->session->userdata('endpoint_logout')."'>Logout</a> ";

	}

}
