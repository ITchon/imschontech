<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Admin Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
		$this->model->CheckSession();
	}

	public function index() 	
	{
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');
        $this->load->view('ADMIN FOR ADMIN/index');
        $this->load->view('ADMIN FOR ADMIN/footer_2020');


		 
		 
	
	}




}
?>