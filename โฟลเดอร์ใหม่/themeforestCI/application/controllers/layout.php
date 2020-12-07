<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class layout Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');






	}

	public function index() 	
	{
        $this->load->view('head_nevbar_hori');
		$this->load->view('Layout_option/horizontal_navi');
		$this->load->view('footer_la');

	}
	public function layout_gd() 	
	{
		$this->load->view('header');
		$this->load->view('nevbar');
		$this->load->view('Layout_option/layout_grid');
		$this->load->view('footer_la');

	}

	public function layout_hori2() 	
	{
        $this->load->view('head_nevbar_hori2');
		$this->load->view('Layout_option/horizontal_navi2');
		$this->load->view('footer_la');

	}
	public function layout_fixd() 	
	{
		$this->load->view('header');
        $this->load->view('nevbar');
		$this->load->view('Layout_option/layout_fixd');
		$this->load->view('footer_la');

	}	

}
?>