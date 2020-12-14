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
        $this->load->model('student_model');

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

        $data['dv_class_list'] = $this->model_teacher->get_division_class($teacher_id);
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
        $data['class']  = $class_data;

    //     $class_name = [];
    //     $dv_chk = [];
    //     foreach($class_data as $class){
    //         foreach($class as $c){
    //             $class =  $c->class_name.$c->class_group;
    //             $dv_id =  $c->dv_id;
    //             array_push($class_name,$class);
    //             array_push($dv_chk,$dv_id);
    //         }
    //     }
    
    //  $data['class_list'] = array_combine($class_name, $dv_chk);

        $this->load->view('teacher/menu');
		$this->load->view('teacher/division',$data);
		$this->load->view('footer');

	}



	public function list() 	
	{
        $student_search = $this->input->get('student_search');
        $class_id =  $this->uri->segment('3');

        $data['student_list'] = $this->model_teacher->get_student_by($class_id);
        $data['class'] = $this->model_teacher->show_class($class_id);

    //     if($this->uri->segment('3')){
    //   $sql =  "SELECT * FROM events where std_id =  $std_id AND teacher_confirm = 0";
    //   $query = $this->db->query($sql); 
    //   $data['result'] = $query->result();
    //   $sql =  "SELECT * FROM student where std_id =  $std_id";
    //   $query = $this->db->query($sql); 
    //   $data['name'] = $query->result()[0];
    //      }
    //      else if($this->input->get('student_search')){
    //         $data['result'] = $this->model_teacher->get_student_detail_by($student_search,$class_id);
    //      }

        $this->load->view('teacher/menu');
        $this->load->view('teacher/list',$data);
        $this->load->view('teacher/footer');

    }
	public function std_data() 	
	{

    //     if($this->uri->segment('3')){
    //     $std_id =  $this->uri->segment('3');
    //     $res = $this->model_teacher->get_classid($std_id);
    //     $class_id = $res->class_id;
    //     $data['student_list'] = $this->model_teacher->get_student_by($class_id);
    //     $data['class'] = $this->model_teacher->show_class($class_id);
    //   $sql =  "SELECT * FROM events where std_id =  $std_id AND teacher_confirm = 0";
    //   $query = $this->db->query($sql); 
    //   $data['result'] = $query->result();
    //   $sql =  "SELECT * FROM student where std_id =  $std_id";
    //   $query = $this->db->query($sql); 
    //   $data['name'] = $query->result()[0];
    //      }
    //      else if($this->input->get('student_search')){
    //         $student_search = $this->input->get('student_search');
    //         $res = $this->model_teacher->get_stdid_bycode($student_search);
    //         $std_id = $res->std_id;
    //         $class_id = $res->class_id;
    //         $data['name'] = $res;
    //         $data['result'] = $this->model_teacher->get_student_detail_byid($std_id,$class_id);
    //      }


    //     $this->load->view('teacher/std_data',$data);
    //     $this->load->view('teacher/footer');

        $teacher_id = $this->session->userdata('teacher_id');
        $res = $this->model_teacher->get_division_class($teacher_id);
        $class_teacher = [];
        foreach($res as $r){
            $c = $r->class_id;
            array_push($class_teacher,$c);
        }

    if($this->uri->segment('3')){
    $std_id =  $this->uri->segment('3');
    $train_id = $this->input->post('train_id'); 
    $data['train_id'] = $train_id;
    $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
    $data['train_select'] = $this->student_model->get_train($std_id);
    
    $start_date = $data['train_detail'][0]->start_date;
    $end_date = $data['train_detail'][0]->end_date;
    $sql =  "SELECT * FROM `events`WHERE start_event >= '$start_date' AND end_event <= '$end_date' and std_id = '$std_id'";
    $query = $this->db->query($sql); 
    $data['result'] = $query->result();
    } else if($this->input->get('student_search')){
        
    $std_id =  $this->uri->segment('3');
    $train_id = $this->input->post('train_id'); 

        $student_search = $this->input->get('student_search');
        $res = $this->model_teacher->get_stdid_bycode($student_search);
        $std_id = $res->std_id;
        $class_id = $res->class_id;
        $data['train_id'] = $train_id;
        $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
        $data['train_select'] = $this->student_model->get_train($std_id);
    
        $start_date = $data['train_detail'][0]->start_date;
        $end_date = $data['train_detail'][0]->end_date;
        $data['result'] = $this->model_teacher->get_student_detail_byid($std_id,$class_id);
     }
    $this->load->library('Googlemaps');
    $config['center'] = '37.4419, -122.1419';
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);

    $marker = array();
    $lat = $data['train_detail'][0]->latitude;
    $long = $data['train_detail'][0]->longitude; 
    $marker['position'] = $lat.','.$long;
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();

    $class_chk = $data['train_detail'][0]->class_id;
    if(in_array($class_chk,$class_teacher)){
        $this->load->view('teacher/std_data',$data);
        $this->load->view('teacher/footer');
    }else{
        echo "who this";
        die();
    }

    }

    public function confirm()
    {
        $id =  $this->uri->segment('3');
        $result = $this->model_teacher->teacher_confirm($id);
        if($result != true){
            echo "wtf happend";
            die();
        }else{
            echo '<script language="javascript">';
                echo 'history.go(-1);';
                echo '</script>';
        }

    }

    public function no_confirm()
    {
        $id =  $this->uri->segment('3');
        $result = $this->model_teacher->teacher_noconfirm($id);
        if($result != true){
            echo "wtf happend";
            die();
        }else{
            echo '<script language="javascript">';
                echo 'history.go(-1);';
                echo '</script>';
        }

    }



}
?>