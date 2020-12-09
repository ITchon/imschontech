<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Teacher Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('teacher/header');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_teacher');

		$this->model->CheckSession();
		$this->model->block_student();
    }
    
    public function dashboard() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $data['tp'] = $this->model_teacher->get_teacher_profile($teacher_id);

        $this->load->view('teacher/menu');
		$this->load->view('teacher/dashboard',$data);
		$this->load->view('footer');

    }

    public function division() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $result = $this->model_teacher->get_division($teacher_id);
        $data['division_list']  = $result;
        $dv_id = [];
        foreach($result as $r){
            $num =  $r->dv_id;
            array_push($dv_id,$num);
        }

        $class_data = [];
        foreach($dv_id as $d){
            $sql = "SELECT * FROM class WHERE dv_id = $d";
            $query = $this->db->query($sql);
            $class = $query->result();
            array_push($class_data,$class);
        }

        $class_name = [];
        $dv_chk = [];
        foreach($class_data as $class){
            foreach($class as $c){
                $class =  $c->class_name.$c->class_group;
                $dv_id =  $c->dv_id;
                array_push($class_name,$class);
                array_push($dv_chk,$dv_id);
            }
        }

        $total_std = [];
        foreach($class_data as $class){
            foreach($class as $c){
            $sql = "SELECT COUNT(std_id) as std_id ,class_id  FROM student WHERE class_id = $c->class_id";
            $query = $this->db->query($sql);
            $student = $query->result();
            array_push($total_std,$student);
        }
    }
    $std_num = [];
    foreach($total_std as $total){
        foreach($total as $t){
            array_push($std_num,$t->std_id);
        }
    }
     $data['class_list'] = array_combine($class_name, $dv_chk);

        $this->load->view('teacher/menu');
		$this->load->view('teacher/division',$data);
		$this->load->view('footer');

	}



	public function list() 	
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