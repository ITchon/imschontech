<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Teacher Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('header');
        // $this->load->view('nevbar');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_teacher');

		$this->model->CheckSession();
	}

	public function index() 	
	{
        $student_search = $this->input->get('student_search');
        $std_id =  $this->uri->segment('3');
        $class_id =  $this->session->userdata('class_id');

        $data['student_list'] = $this->model_teacher->get_student_by($class_id);

        if($this->uri->segment('3')){
            $data['student_detail'] = $this->model_teacher->get_student_detail_byid($std_id,$class_id);
         }
         else if($this->input->get('student_search')){
            $data['student_detail'] = $this->model_teacher->get_student_detail_by($student_search,$class_id);
         }

		$this->load->view('teacher/list',$data);

	}




}
?>