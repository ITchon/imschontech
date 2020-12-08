<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class ui_table Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{

		$this->load->view('table/manage');
	
	}
}
?>