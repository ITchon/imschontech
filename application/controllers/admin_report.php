<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class admin_report Extends CI_controller{

	function __construct(){
		parent::__construct();

		// $this->load->model('class_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{

		$this->load->view('admin/report');
        $this->load->view('admin/footer_2020');
        
    }

}
?>