<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function company() {
	echo "Template CRUD";
}

function user() {
	$CI =& get_instance();
	return $CI->session->userdata('user_id');
}

function online() {
	$CI =& get_instance();
	$query = $CI->db->query("SELECT nmuser, max(log_date) as datex FROM log_load
		WHERE user_id!='' AND log_date>=(now() - INTERVAL 10 MINUTE)
		GROUP BY nmuser ORDER BY nmuser, datex asc");
	if ( $query->num_rows() >= 1 ) {
		
		
		echo "<div width='200px' style='float:right;float:left;padding-left:20px'>";
		echo "Online : " . $query->num_rows();
		echo "</div>";
		
		foreach ( $query->result() as $data ) {
			
			echo "<div width='200px' style='float:right;float:left;padding-left:20px'>";
			echo "<img src='" . base_url('assets/css/icons/st_green.gif') ."'/> ";
			echo ucwords($data->nmuser) . "   ";
			echo "</div>";
			
		}
		
		
	}
}


define('copyright', 'Priyana Anggiyawan');
define('version', 'Version : Version 08-2018 ');
define('user', 'User ID : ');
define('online', 'User ID : ');
