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
			$sql="SELECT  * FROM student_train_detail  where status != 0";
        	$query = $this->db->query($sql); 
        	$data['result'] = $query->result(); 
        	$data['total'] = $query->num_rows(); 
			$this->load->view('ADMIN FOR ADMIN/header');
			$this->load->view('ADMIN FOR ADMIN/nevbar');
			$this->load->view('ADMIN FOR ADMIN/dashboard/index',$data);
			$this->load->view('ADMIN FOR ADMIN/footer_2020');

		 
		 
	
	}




}
?>