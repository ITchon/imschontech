<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Teacher Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_teacher');
        $this->load->model('model_spv');
        $this->load->model('model_pdf');
        $this->load->model('student_model');
        
        $teacher_id =  $this->session->userdata('teacher_id');
        $data['result'] = $this->model_teacher->get_division($teacher_id);
        $data['result_subject'] = $this->model_spv->get_subject_teacher($teacher_id);
        
        $this->load->view('teacher/header');
        $this->load->view('teacher/nevbar',$data);
        // $this->load->view('teacher/menu',$data);

		$this->model->CheckSession();
		$this->model->block_for_teacher();
    }
    
    public function dashboard() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $data['tp'] = $this->model_teacher->get_teacher_profile($teacher_id);

        
		$this->load->view('teacher/dashboard',$data);
		$this->load->view('teacher/footer');


    }
    public function std_work() 	
	{
        if($this->input->post('std_id')){
            $std_id = $this->input->post('std_id'); 
            $text = "and student.std_id = '$std_id'";
        }else{
            $text = '';
        }

        $teacher_id =  $this->session->userdata('teacher_id');
        $result = $this->model_teacher->get_division($teacher_id);

        $data['result_test'] = $this->model_teacher->get_std_data($teacher_id,$text);
        $data['result_search'] = $this->model_teacher->get_std_data1($teacher_id);

        $train_id = $this->input->post('train_id'); 

        $data['result'] = $this->model_teacher->get_events_date2($teacher_id);
        
        $data['division_list'] = $this->model_teacher->get_dv_class($teacher_id);
        $data['class_list'] = $this->model_teacher->get_dv_class_group($teacher_id);
        // print_r($data['division_list']);
        // print_r($data['class_list']);
        // exit;
		$this->load->view('teacher/std_work',$data);
        $this->load->view('teacher/modal');
        $this->load->view('teacher/footer');

    }
    public function subject() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $subject_id =  $this->uri->segment('3');
        $sql="SELECT  * FROM student_train_detail where spv_id = '$teacher_id' and status != 0";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $data['total'] = $query->num_rows();  

        $sql="SELECT  * FROM supervision_teacher  where  subject_id = '$subject_id'";
        $query = $this->db->query($sql); 
        $data['result_spv'] = $query->result_array(); 
        $sql="SELECT  * FROM subject  where  subject_id = '$subject_id'";
        $query = $this->db->query($sql); 
        $data['result_subject'] = $query->row(); 
        // print_r($data['result_spv']);
        $this->load->view('teacher/std_list',$data);
        $this->load->view('teacher/footer');

    }
    public function supervision() 	
	{
        $std_id =  $this->uri->segment('3');
        $teacher_id =  $this->session->userdata('teacher_id');
        $data['result_spv'] = $this->model_spv->get_spv_teacher($std_id);
        $sql="SELECT  * FROM student_train_detail
        where std_id = '$std_id' and status != 0";
        $query = $this->db->query($sql); 
        $data['result_train'] = $query->result();
        $data['total'] = $query->num_rows(); 

		$this->load->view('teacher/supervision',$data);
		$this->load->view('teacher/footer');


    }
    public function supervision_view() 	
	{   
        $spv_id =  $this->uri->segment('3');
        $sql="SELECT  * FROM `supervision_contact` sc
        inner join subject s on s.subject_id = sc.subject_id
        where spv_contact_id = '$spv_id'";
        $query = $this->db->query($sql); 
        $data['result_spv']  = $query->row(); 
        $data['date'] = $this->model->Thai_date($data['result_spv']->approve_date);
        $data['result'] = $this->model_spv->get_spv_data($spv_id);
        $data['std_detail'] = $this->model_pdf->get_train_detail($data['result_spv']->t_id);
        // print_r($data['result']);exit;
		$this->load->view('teacher/supervision_view',$data);
		$this->load->view('teacher/footer');


    }
    public function supervision_view_th() 	
	{   
        $spv_id =  $this->uri->segment('4');
        $sql="SELECT  * FROM `supervision_teacher` st
        inner join subject s on s.subject_id = st.subject_id
        where spv_teacher_id = '$spv_id'";
        $query = $this->db->query($sql); 
        $data['result_spv']  = $query->row(); 
        $data['date'] = $this->model->Thai_date($data['result_spv']->approve_date);
        $data['result'] = $this->model_spv->get_spv_data_th($spv_id);
        $data['std_detail'] = $this->model_pdf->get_train_detail($data['result_spv']->t_id);
        // print_r($data['result']);exit;
		$this->load->view('teacher/supervision_view',$data);
		$this->load->view('teacher/footer');


    }
    public function supervision_insert() 	
	{   
        $std_id =  $this->uri->segment('4');
        $subject_id =  $this->uri->segment('3');
        
        
        $data['std_detail'] = null;
            $data['result'] = $this->model_spv->get_subject_data($subject_id);
            if($data['result']!=null){
                $sql="SELECT  * FROM `grouplist_list` gll
                inner join group_list gl on gl.glist_id = gll.glist_id
                inner join list l on l.list_id = gll.list_id";
                $query = $this->db->query($sql); 
                $data['result_list']  = $query->result(); 
                // print_r($data['result_list']);exit;
                $data['subject_name'] = $data['result'][0]->subject_name;
                $data['subject_id'] = $data['result'][0]->subject_id;
                $data['std_data'] = $this->model_spv->get_train($std_id);
                $data['train_id'] = $data['std_data'][0]->t_id;
                $data['std_detail'] = $this->model_pdf->get_train_detail($data['std_data'][0]->t_id);
            }
            // print_r($data['std_data'][0]->t_id);exit;
		$this->load->view('teacher/supervision_insert',$data);
		$this->load->view('teacher/footer');


    }

    public function supervision_save_th() 	
	{   
       $std_id =  $this->uri->segment('3');
       $train_id = $this->input->post('train_id');
       $subject_id = $this->input->post('subject_id');
       $summarize = $this->input->post('summarize');
       $max = $this->input->post('max');
      //Store data in array 2 dimension 
       $a= [];
       for($i=1;$i<=$max;$i++){
          $data = $this->input->post($i);
          $g_id = substr($data, 1);
          $score = substr($data, 0, 1);
          $data= array ("glist_id"=>$g_id,"score"=>$score);
          array_push($a,$data);
       }
       $result = $this->model_spv->supervision_save_teacher($train_id,$subject_id,$summarize,$a);
       if($result){
        $this->session->set_flashdata('success','<div class="alert alert-success"><span> บันทึกข้อมูลเรียบร้อย</span></div>');
        redirect("teacher/subject/$subject_id");  
   }else{
        $this->session->set_flashdata('success','<div class="alert alert-danger"><span> เกิดข้อผิดพลาด</span></div>');
        redirect("teacher/subject/$subject_id");  
   }
    }

    public function student() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $sql="SELECT  * FROM student_train_detail where spv_id = '$teacher_id' and status != 0";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); 
        $data['total'] = $query->num_rows(); 

        $this->load->view('teacher/std_show',$data);
        $this->load->view('teacher/footer');

    }

    public function division() 	
	{
        if($this->input->post('std_id')){
            $std_id = $this->input->post('std_id'); 
            $text = "and student.std_id = '$std_id'";
        }else{
            $text = '';
        }

        $teacher_id =  $this->session->userdata('teacher_id');
        $result = $this->model_teacher->get_division($teacher_id);

        $data['result_test'] = $this->model_teacher->get_std_data($teacher_id,$text);
        $data['result_search'] = $this->model_teacher->get_std_data1($teacher_id);

        $train_id = $this->input->post('train_id'); 

        $data['result'] = $this->model_teacher->get_events_date2($teacher_id);
        
        $data['division_list'] = $this->model_teacher->get_dv_class($teacher_id);
        $data['class_list'] = $this->model_teacher->get_dv_class_group($teacher_id);
        // print_r($data['division_list']);
        // print_r($data['class_list']);
        // exit;
		$this->load->view('teacher/division',$data);
        $this->load->view('teacher/modal');
$this->load->view('teacher/footer');

	}

	public function list() 	
	{
        $teacher_id =  $this->session->userdata('teacher_id');
        $class_id = $this->input->post('class_id');
        if($this->uri->segment('3')){
            $class_id =  $this->uri->segment('3');
        }
        $data['student_list'] = $this->model_teacher->get_student_by($class_id,$teacher_id);
        $data['class'] = $this->model_teacher->show_class($class_id);

    //      if($this->uri->segment('3')){
    //    $sql =  "SELECT * FROM events where std_id =  $std_id AND teacher_confirm = 0";
    //    $query = $this->db->query($sql); 
    //    $data['result'] = $query->result();
    //    $sql =  "SELECT * FROM student where std_id =  $std_id";
    //    $query = $this->db->query($sql); 
    //    $data['name'] = $query->result()[0];
    //       }
          if($this->input->get('student_search')){
             $data['result'] = $this->model_teacher->get_student_detail_by($student_search,$class_id);
          }

        
        $this->load->view('teacher/list',$data);
$this->load->view('teacher/footer');

    }
	public function std_data() 	
	{

 

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
    
    $res = $this->model_teacher->get_std($std_id);
    if($res != null){

    $class_id = $res->class_id;

    $start_date = $data['train_detail'][0]->start_date;
    $end_date = $data['train_detail'][0]->end_date;
    $data['result'] = $this->model_teacher->get_events_date($start_date,$end_date,$std_id,$class_id);
   
    $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' AND teacher_confirm = 0 ORDER BY `events`.`start_event` DESC";
      $query = $this->db->query($sql); 
      $data['result_test'] = $query->result();
      $latlong = $data['train_detail'][0]->latlong;
      if($latlong == null){
        $latlong = ',';
      }


      $this->load->library('Googlemaps');
      $config['center'] = $latlong;
      $config['zoom'] = '10';
      $this->googlemaps->initialize($config);
  
      $marker = array();
      $marker['position'] = $latlong;
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();
  
      $class_chk = $data['train_detail'][0]->class_id;
      
      if(in_array($class_chk,$class_teacher)){
          $this->load->view('teacher/std_data',$data);
          $this->load->view('teacher/modal');
    $this->load->view('teacher/footer');
      }
  }else{
      $this->load->view('teacher/error');
      $this->load->view('teacher/footer');


    }
 } else if($this->input->get('student_search')){
        
        $train_id = $this->input->post('train_id'); 

        $student_search = $this->input->get('student_search');
        $res = $this->model_teacher->get_stdid_bycode($student_search);
        if($res != null){
        $std_id = $res[0]->std_id;
        $class_id = $res[0]->class_id;
        $data['train_id'] = $train_id;
        $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
        $data['train_select'] = $this->student_model->get_train($std_id);
    
        $start_date = $data['train_detail'][0]->start_date;
        $end_date = $data['train_detail'][0]->end_date;
        $data['result'] = $this->model_teacher->get_events_date($start_date,$end_date,$std_id,$class_id);

      $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' AND teacher_confirm = 0 ORDER BY `events`.`start_event` DESC";
      $query = $this->db->query($sql); 
      $data['result_test'] = $query->result();
      $latlong = $data['train_detail'][0]->latlong;
      if($latlong == null){
        $latlong = ',';
      }
        
      $this->load->library('Googlemaps');
      $config['center'] = $latlong;
      $config['zoom'] = '10';
      $this->googlemaps->initialize($config);

      $marker = array();
      $marker['position'] = $latlong;
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();

    $class_chk = $data['train_detail'][0]->class_id;
    
    if(in_array($class_chk,$class_teacher)){
        $this->load->view('teacher/modal');
        $this->load->view('teacher/std_data',$data);
$this->load->view('teacher/footer');
    }
}else{
    $this->load->view('teacher/error');
    $this->load->view('teacher/footer');
}
}

    }

    public function confirm()
    {
        $std_id = $this->input->post('std_id'); 
        $date = $this->input->post('date'); 
        $result = $this->model_teacher->get_eid($std_id,$date);

        foreach($result as $r){
            $id = $r->id;
            $result = $this->model_teacher->teacher_confirm($id);
        }
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
        $std_id = $this->input->post('std_id'); 
        $date = $this->input->post('date'); 
        $result = $this->model_teacher->get_eid($std_id,$date);

        foreach($result as $r){
            $id = $r->id;
            $result = $this->model_teacher->teacher_noconfirm($id);
        }
        if($result != true){
            echo "wtf happend";
            die();
        }else{
            echo '<script language="javascript">';
                echo 'history.go(-1);';
                echo '</script>';
        }

    }

    public function manage_internbook() 	
	{
        if($this->input->post('std_id')){
            $std_id = $this->input->post('std_id'); 
            $text = "and student.std_id = '$std_id'";
        }else{
            $text = '';
        }

        $teacher_id =  $this->session->userdata('teacher_id');
        $result = $this->model_teacher->get_division($teacher_id);

        $data['result_test'] = $this->model_teacher->get_std_data($teacher_id,$text);
        $data['result_search'] = $this->model_teacher->get_std_data1($teacher_id);

        $train_id = $this->input->post('train_id'); 

        $data['result'] = $this->model_teacher->get_events_date2($teacher_id);
        
        $data['division_list'] = $this->model_teacher->get_dv_class($teacher_id);
        $data['class_list'] = $this->model_teacher->get_dv_class_group($teacher_id);

        
		$this->load->view('teacher/manage_intern',$data);
        $this->load->view('teacher/modal');
        $this->load->view('teacher/footer');

    }

    public function document() 	
	{

        $teacher_id =  $this->session->userdata('teacher_id');

        $data['student_list'] = $this->model_teacher->get_student_byteach($teacher_id);

    //      if($this->uri->segment('3')){
    //    $sql =  "SELECT * FROM events where std_id =  $std_id AND teacher_confirm = 0";
    //    $query = $this->db->query($sql); 
    //    $data['result'] = $query->result();
    //    $sql =  "SELECT * FROM student where std_id =  $std_id";
    //    $query = $this->db->query($sql); 
    //    $data['name'] = $query->result()[0];
    //       }
        //   if($this->input->get('student_search')){
        //      $data['result'] = $this->model_teacher->get_student_detail_by($student_search,$class_id);
        //   }


        
		$this->load->view('teacher/document',$data);
        $this->load->view('teacher/modal');
        $this->load->view('teacher/footer');

    }


    

}
?>