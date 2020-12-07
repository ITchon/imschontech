<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class ui_element Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{

		$this->load->view('UI_element/Typography');
		$this->load->view('footer_la');

	}

	public function btn() 	
	{

		$this->load->view('UI_element/buttons');
		$this->load->view('footer_la');

	}

	public function table_basic() 	
	{

		$this->load->view('UI_element/table_b');
		$this->load->view('footer_la');

	}

	public function forms() 	
	{

		$this->load->view('UI_element/ui_forms');
		$this->load->view('footer_la');

	}

	public function panels() 	
	{

		$this->load->view('UI_element/ui_panels');
		$this->load->view('footer_la');

	}

	public function images() 	
	{

		$this->load->view('UI_element/ui_images');
		$this->load->view('footer_la');

	}
}
?>