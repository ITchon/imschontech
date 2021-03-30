<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class main Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
	}

	public function index() 	
	{
		if($this->session->userdata('id') == null){
			redirect('login');
		}
		else if($this->session->userdata('status_login') == 0){
			$this->load->view('changepassword');
		}else if($this->session->userdata('std_id')){
			redirect('student');
		}else if($this->session->userdata('teacher_id')){
			redirect('teacher/dashboard');
		}else if($this->session->userdata('contact_id')){
			redirect('contact/dashboard');
		}else if($this->session->userdata('admin_id')){
			redirect('admin');

		}else if($this->session->userdata('usergroup') == 'bilateral'){
			redirect('admin');

		}else if($this->session->userdata('usergroup') == 'course'){
			redirect('admin');

		}else if($this->session->userdata('usergroup') == 'registrar'){
			redirect('admin');

		}else if($this->session->userdata('usergroup') == 'person'){
			redirect('admin');

		}else{
			echo "lol";
			exit;
		}

	}




}
?>