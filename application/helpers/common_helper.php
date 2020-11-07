<?php


function check_session($str_usertype = null) {
    $CI =& get_instance();
   if(@$CI->session->userdata('group')['group'] != $str_usertype)
	{
		return false;
	} else {
		return true;
	}
}

function update_session()
{
	$CI =& get_instance();

	$query = $CI->db->get_where('users',array('userid'=>$CI->session->userdata('userid')));
	$row_user 	= $query->row_array();
	$CI->session->set_userdata('logged_in', TRUE);
	$CI->session->set_userdata('verified', $row_user['verified']);
}


function resize_avatar($nama_file_baru){
    $CI =& get_instance();
	$CI->load->library('image_lib');

	$conf['image_library']='gd2';
	$conf['source_image']= FCPATH.'/assets/uploads/'.$nama_file_baru;
	$conf['create_thumb']= FALSE;
	$conf['maintain_ratio']= TRUE;
	$conf['quality']= '60%';
	$conf['width']= 900;
	$conf['height']= 1060;
	$conf['new_image']=  FCPATH.'/assets/uploads/'.$nama_file_baru;

	$CI->image_lib->clear();
	$CI->image_lib->initialize($conf);
	$CI->image_lib->resize();
}

function tgl_indo($tanggal)
{
	$bulan = array (
		1 =>   'Januari',
		2 =>'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	return @$pecahkan[2] . ' ' . @$bulan[ (int)@$pecahkan[1] ] . ' ' . @$pecahkan[0];
}

function month_convert($b = null){
	$format = array(
			'1' => '01',
			'2' => '02',
			'3' => '03',
			'4' => '04',
			'5' => '05',
			'6' => '06',
			'7' => '07',
			'8' => '08',
			'9' => '09',
			'10' => '10',
			'11' => '11',
			'12' => '12',
	);
	return strtr($b, $format);
}

function day_convert($b = null){
	$format = array(
			'1' => '01',
			'2' => '02',
			'3' => '03',
			'4' => '04',
			'5' => '05',
			'6' => '06',
			'7' => '07',
			'8' => '08',
			'9' => '09',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'13' => '13',
			'14' => '14',
			'15' => '15',
			'16' => '16',
			'17' => '17',
			'18' => '18',
			'19' => '19',
			'20' => '20',
			'21' => '21',
			'22' => '22',
			'23' => '23',
			'24' => '24',
			'25' => '25',
			'26' => '26',
			'27' => '27',
			'28' => '28',
			'29' => '29',
			'30' => '30',
			'31' => '31',
			'32' => '31',
	);
	return strtr($b, $format);
}

function current_id_group()
{
	$CI =& get_instance();
	return $CI->session->userdata('id_group');
}

function current_group($param = null)
{
	$CI =& get_instance();
	return $CI->session->userdata('group')->group;
}

function current_ses($param = null)
{
	$CI =& get_instance();
	return $CI->session->userdata($param);
}

function bulan($i = null){
	$format = array(
			'1' => 'Januari',
			'2' => 'Februari',
			'3' => 'Maret',
			'4' => 'April',
			'5' => 'Mei',
			'6' => 'Juni',
			'7' => 'Juli',
			'8' => 'Agustus',
			'9' => 'September',
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
	);
	return strtr($i, $format);
}

function distance($lat1, $lon1, $lat2, $lon2) { 
	$pi80 = M_PI / 180; 
	$lat1 *= $pi80; 
	$lon1 *= $pi80; 
	$lat2 *= $pi80; 
	$lon2 *= $pi80; 
	$r = 6372.797; // mean radius of Earth in km 
	$dlat = $lat2 - $lat1; 
	$dlon = $lon2 - $lon1; 
	$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2); 
	$c = 2 * atan2(sqrt($a), sqrt(1 - $a)); 
	$km = $r * $c; 
	$m = $km * 1000;
	return $m; 
}

function get_ip_user()
{
	$ip = "";
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}