<?php

class Model_Login extends CI_Model{

	public function __construct(){
		$this->load->database();
		$this->load->helper('url');
	}


	function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}
}

 ?>