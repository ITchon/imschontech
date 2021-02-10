<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class website Extends CI_controller{

	function __construct(){
		parent::__construct();

		// $this->load->model('class_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        // $this->load->view('header_b');
        // $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{

		$this->load->view('before_login');
        // $this->load->view('ADMIN FOR ADMIN/footer_2020');
        
    }

}
?>