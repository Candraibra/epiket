<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginmodel extends CI_Model
{
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function auth($no_induk,$password){
		$query=$this->db->query("SELECT * FROM tb_admin WHERE no_induk='$no_induk' AND password='$password'");
		return $query;
}
}
