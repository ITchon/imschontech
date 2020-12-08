<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class main Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('header');
        $this->load->view('nevbar');
		$this->load->database(); 
        $this->load->model('model');

		$this->model->CheckSession();
	}

	public function index() 	
	{
		$this->load->view('index');
		$this->load->view('footer');

	}




}
?>