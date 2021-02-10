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

		$this->load->view('website/before_login');
        // $this->load->view('ADMIN FOR ADMIN/footer_2020');
        
    }
	public function view_student() 	
	{
		$qry_inp =  "SELECT 
		cl.class_id,
		cl.class_name,
		cl.class_group,	
		std.std_id,
		std.title,
		std.fname,
		std.lname,
		std.gender,
		std.tel,
		std.email,
		std.status,
		std.std_code,
		std.birth_date,
		std.class_id FROM student AS std 
		INNER JOIN class AS cl ON cl.class_id = std.class_id";
		$query = $this->db->query($qry_inp); 
		$data['result'] = $query->result();

		$this->load->view('website/before_student',$data);
        $this->load->view('ADMIN FOR ADMIN/footer_2020');
        
    }

}
?>