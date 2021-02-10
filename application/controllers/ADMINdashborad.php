<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class ADMINdashborad Extends CI_controller{

	function __construct(){
		parent::__construct();

		// $this->load->model('class_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
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
		
		$this->load->view('ADMIN FOR ADMIN/dashboard/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
    }
	
	public function index_t() 	
	{
	
		$qry_inp =  "SELECT 
						cl.class_name,
						th.teacher_id,
						th.title,
						th.fname,
						th.lname,
						th.tel,
						th.email,
						th.th_code,
						th.th_birth_date FROM teacher AS th LEFT JOIN class AS cl ON cl.teacher_id = th.teacher_id";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
		
		$this->load->view('ADMIN FOR ADMIN/dashboard/view_t',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
    }

}
?>