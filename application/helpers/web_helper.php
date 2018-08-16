<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Helper untuk pengaturan web
 */


function is_login()
{
    $CI =& get_instance();

    if ( $CI->session->userdata('log_session') == FALSE ) {
        redirect(base_url() . 'akun/masuk');
        //$CI->load->view('akun/masuk');
		exit();
    }

}

// Cek jika belum login
function must_login()
{
    if ( is_login() == false ) {
        redirect('akun/masuk');
        die;
    }
}


/*
//meload file css
function load_css($target_href = array())
{
    $return = '';
    foreach ($target_href as $value) {
        $return .= '<link type="text/css" href="'.$value.'" rel="stylesheet">'.PHP_EOL;
    }
    return $return;
}

//meload file js
function load_js($target_src = array())
{
    $return = '';
    foreach ($target_src as $value) {
        $return .= '<script src="'.$value.'" type="text/javascript"></script>'.PHP_EOL;
    }
    return $return;
}
*/

//membuat div class alert
function get_alert($notif = 'success', $msg = '')
{
    return "<div class='alert alert-" . $notif . "'><b><center> " . $msg . "</center></b></div>";
}

function get_message($notif = 'success', $msg = '')
{
    return "<div class='message alert-" . $notif . "'><b><center> " . $msg . "</center></b></div>";
}

function format_indo($date) {
	if ( $date != '0000-00-00 00:00:00' AND isset($date)){
		$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " " . $tahun;
		echo $result;
	} else {
		
	}
}

function format_indoX($date) {
	if( strtotime($date) > 0 ){
		return $date;
	} else {
		
	}
}

function format_indo_return($date) {
	if ( $date != '0000-00-00 00:00:00' AND isset($date)){
		$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " " . $tahun;
		return $result;
	} else {
		
	}
}

function int_to_month($date) {
	
		$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		$result = $BulanIndo[(int)$date-1];
		return $result;

}

function datex( $datetime ){
	$datex = date('Y-m-d', strtotime( $datetime ));
	if ( $datex == '1970-01-01' ){
		return '0000-00-00';
	} else {
		return $datex;
	}
}

function tgl_to_day( $tgl ){
	$unix = strtotime($tgl);
	 $hari = date("D", $unix); // hasilnya 3 huruf nama hari bahasa inggris
	 # supaya harinya menjadi bahasa indonesia maka harus kita gant/replace
	 $hari = str_replace('Sun', 'Minggu', $hari);
	 $hari = str_replace('Mon', 'Senin', $hari);
	 $hari = str_replace('Tue', 'Selasa', $hari);
	 $hari = str_replace('Wed', 'Rabu', $hari);
	 $hari = str_replace('Thu', 'Kamis', $hari);
	 $hari = str_replace('Fri', 'Jum\'at', $hari);
	 $hari = str_replace('Sat', 'Sabtu', $hari);
	 
	 echo $hari;
}

function get_checkbox($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND " . $field . "='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		if ( $res->$field == $id_field )
		{
			echo 'checked';
		}
}

function get_checkbox_r($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND " . $field . "='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		if ( $res->$field == $id_field )
		{
			return 'checked';
		}
}
function get_checkbox_text($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND defect='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		//if ( $res->$field == $id_field )
		//{
			//echo 'value="$res->$field" <script></script>';
			echo $res->$field;
		//}
}

function get_checkbox_prolain($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND proses='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		//if ( $res->$field == $id_field )
		//{
			//echo 'value="$res->$field" <script></script>';
			echo $res->proses_lain;
		//}
}

function get_checkbox_pro($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND proses_2='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		//if ( $res->$field == $id_field )
		//{
			//echo 'value="$res->$field" <script></script>';
			echo $res->proses_2_no;
		//}
}

function get_checkbox_fin($table, $field, $id_nc, $id_field){
		//$id = str_replace("_", "/", $id_nc);
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM " . $table . " WHERE id_nc='" . $id_nc . "' AND finishing='" . $id_field . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}

		//if ( $res->$field == $id_field )
		//{
			//echo 'value="$res->$field" <script></script>';
			echo $res->$field;
		//}
}
	
/*	
function get_checkbox_dev( $post ){
	
		if ( $post == 1 )
		{
			echo 'checked';
		}
}
*/

function get_checkbox_dev( $id, $noreq ){
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM tbl_dev_option WHERE noreq='" . $noreq . "' AND val='" . $id . "'";
		$data 	= $CI->db->query( $query );
		//foreach( $data->result() as $res ){}
		if ( $data->num_rows() > 0 )
		{
			echo 'checked';
		}
}

function result_checkbox_dev( $id, $noreq ){
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM tbl_dev_option WHERE noreq='" . $noreq . "' AND val='" . $id . "'";
		$data 	= $CI->db->query( $query );
		//foreach( $data->result() as $res ){}
		if ( $data->num_rows() > 0 )
		{
			return 1;
		}
}

function val_checkbox_dev( $id, $noreq ){
		$CI =& get_instance();
		
		$query 	= "SELECT * FROM tbl_dev_option WHERE noreq='" . $noreq . "' AND val='" . $id . "'";
		$data 	= $CI->db->query( $query );
		foreach( $data->result() as $res ){}
		if ( $data->num_rows() > 0 )
		{
			return $res->valtext;
		}
}

function email_rep( $id_rep ){
	
		$CI =& get_instance();
		
		$sql = "SELECT email FROM tbl_rep WHERE id_rep='" . $id_rep . "'";
		$query = $CI->db->query($sql);
		if ( $query->num_rows() > 0 ) {
			foreach ( $query->result() as $data ) {}
			
			return $data->email;
		} else {
			$sql_group = "SELECT email FROM tbl_rep WHERE group_rep='" . $id_rep . "'";
			$query_group = $CI->db->query($sql_group);
			if ( $query_group->num_rows() > 0 ) {
				
				$group = "";
				foreach ( $query_group->result() as $key => $data_group) {
					if ( $key != 0 ){
					$group .= ", ";
					}
					$group .= $data_group->email;
				}
				return $group;
			}
		}
}

function cek_tanggal($teks) {
		//untuk mengecek akhir tanggal - Aplikasi report intercompany
		
		$kata_kotor = array("28", "29", "30", "31"); 
		$hasil = 0;
		$jml_kata = count($kata_kotor);
		for ($i=0;$i<$jml_kata;$i++) {
			if (stristr($teks,$kata_kotor[$i])){ $hasil=1; }
		}
		 
		return $hasil;
 
}

function get_nmuser($user_id){
		$CI =& get_instance();
		
		$sql 	= "SELECT * FROM tbl_user WHERE user_id='" . $user_id . "'";
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->nmuser;

}

function get_divisi($user_id){
		$CI =& get_instance();
		
		$sql 	= "SELECT
			(SELECT departemen FROM tbl_departemen WHERE dept_id=tbl_user.dept_id) AS departemen
			FROM tbl_user WHERE user_id='" . $user_id . "'";
			
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->departemen;

}

function get_divisi1( $dept_id ){
		$CI =& get_instance();
		
		$sql 	= "SELECT departemen FROM tbl_departemen WHERE dept_id='" . $dept_id . "'";
			
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->departemen;

}

function get_divisi2( $user_id ){
		$CI =& get_instance();
		
		$sql 	= "SELECT
			dept_id
			FROM tbl_user WHERE user_id='" . $user_id . "'";
			
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->dept_id;

}

function get_jabatan($user_id){
		$CI =& get_instance();
		
		$sql 	= "SELECT
			(SELECT jabatan FROM tbl_jabatan WHERE jabatan_id=tbl_user.jabatan_id) AS jabatan
			FROM tbl_user WHERE user_id='" . $user_id . "'";
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->jabatan;

}

function getJbtID($user_id){
		$CI =& get_instance();
		
		$sql 	= "SELECT jabatan_id FROM tbl_user WHERE user_id='" . $user_id . "'";
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		return $data->jabatan_id;

}

function noseri($keterangan){
		$CI =& get_instance();
		
		$sql 	= "SELECT * FROM tbl_noseridok WHERE keterangan='" . $keterangan . "'";
		$query 	= $CI->db->query( $sql );
		
		foreach( $query->result() as $data ){}
		
		// $noseri = $data->noseridok + 1;
		// increment +1
		// $dataX = array(
			// 'noseridok'	=> sprintf("%06s", ($noseri)),
		// );
								
		// $CI->db->where('keterangan', $keterangan);
		// $CI->db->update('tbl_noseridok', $dataX);
		// increment +1 EOF
		
		return $data->noseridok;
}


function bulan_to_alphabet($bulan){
				switch ($bulan) {
			case 1 :
				return "I";
			break;
			case 2 :
				return "II";
			break;
			case 3 :
				return "III";
			break;
			case 4 :
				return "IV";
			break;
			case 5 :
				return "V";
			break;
			case 6 :
				return "VI";
			break;
			case 7 :
				return "VII";
			break;
			case 8 :
				return "VIII";
			break;
			case 9 :
				return "IX";
			break;
			case 10 :
				return "X";
			break;
			case 11 :
				return "XI";
			break;
			case 12 :
				return "XII";
			break;
			default :
				return "Error";
			break;
		}
	}

	
//CMIS SA
function nilairataKL($userid, $bulan, $tahun){
	$CI =& get_instance();
	
	$query = $CI->db->query("SELECT (sum(naAtasan) / count(*) ) as rata FROM tbl_nilai_kl WHERE user_id='" . $userid . "'
	AND bulan='" . $bulan . "'
	AND tahun='" . $tahun . "'");
	
	foreach( $query->result() as $res ){
		if ( $res->rata ) {
			return number_format($res->rata,2,".","");
		}	
	}
	
}

function nilairataKN($userid, $bulan, $tahun){
	$CI =& get_instance();
	
	$query = $CI->db->query("SELECT (sum(naAtasan) / count(*) ) as rata FROM tbl_nilai_kn WHERE user_id='" . $userid . "'
	AND bulan='" . $bulan . "'
	AND tahun='" . $tahun . "'");
	
	foreach( $query->result() as $res ){
		if ( $res->rata ) {
			return number_format($res->rata,2,".","");
		}
	}
	
}

function nilairataKLx($userid, $bulan, $tahun){
	$CI =& get_instance();
	
	$query = $CI->db->query("SELECT (sum(na) / count(*) ) as rata FROM tbl_nilai_kl WHERE user_id='" . $userid . "'
	AND bulan='" . $bulan . "'
	AND tahun='" . $tahun . "'");
	
	foreach( $query->result() as $res ){
		if ( $res->rata ) {
			return number_format($res->rata,2,".","");
		}	
	}
	
}

function nilairataKNx($userid, $bulan, $tahun){
	$CI =& get_instance();
	
	$query = $CI->db->query("SELECT (sum(na) / count(*) ) as rata FROM tbl_nilai_kn WHERE user_id='" . $userid . "'
	AND bulan='" . $bulan . "'
	AND tahun='" . $tahun . "'");
	
	foreach( $query->result() as $res ){
		if ( $res->rata ) {
			return number_format($res->rata,2,".","");
		}
	}
	
}
//CMIS SA EOF
function format_size($size) {
    $mod = 1024;

    $units = explode(' ','B KB MB GB TB PB');
    for ($i = 0; $size > $mod; $i++) {
        $size /= $mod;
    }
	
	return round($size, 2) . ' ' . $units[$i];
	
}

function check_dir($dir){
	
	foreach (new RecursiveDirectoryIterator(($dir)) as $entry) {
		if ($entry->isFile())
		$total += $entry->getSize();
	}
	
	return ($total);
}

function url_help($id){
		
		$CI =& get_instance();

		return base_url('uploads/help' . '/' . $id . '.pdf');
}

//sumber encode http://richardpeacock.com/blog/2011/08/encode-any-string-only-alphanumeric-chars-better-urlencode
function gie_encode($input) {
    $strrev = strrev($input);
    $string = base64_encode($strrev);
    return bin2hex($string);
}

function gie_decode($input) {
    $string = pack("H*", $input);
    $base64 =  base64_decode($string);
    return strrev($base64);

}


