<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url_helper');
        $this->load->model('model_user');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('login/input_user');
	}
}

?>