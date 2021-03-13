<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Crud Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');

	}

	public function event() 	
    {   
        $date = $this->input->post('date');
        $std_id = $this->input->post('std_id');
        if($this->uri->segment('3')){
            $std_id = $this->uri->segment('3');
        }
         $data['date'] = $date;
         $sql =  "SELECT * FROM `events`  where DATE(start_event) =  '$date' and std_id = $std_id ORDER BY `events`.`start_event` ASC";
         $query = $this->db->query($sql); 
         $data['result'] = $query->result();
         $sql =  "SELECT * FROM event_img ";
         $query = $this->db->query($sql); 
         $data['result_img'] = $query->result();
		 $this->load->view('student/modal_data',$data);
        
    }
	public function C_std_work_time() 	
    {   
        $t_id = $this->input->post('t_id');
        if($this->uri->segment('3')){
            $std_id = $this->uri->segment('3');
        }
        $sql =  "SELECT * FROM `std_work_time` WHERE  t_id = '$t_id'";
        $query = $this->db->query($sql); 
        $data['result_date'] = $query->result();
        // print_r($data['result_date']);exit;
		 $this->load->view('contact/std_work_time',$data);
        
    }
	public function std_work_time() 	
    {   
        $t_id = $this->input->post('t_id');
        if($this->uri->segment('3')){
            $std_id = $this->uri->segment('3');
        }
        $sql =  "SELECT * FROM `std_work_time` WHERE  t_id = '$t_id'";
        $query = $this->db->query($sql); 
        $data['result_date'] = $query->result();
        // print_r($data['result_date']);exit;
		 $this->load->view('student/std_work_time',$data);
        
    }
	public function save_confirm() 	
    {   
        $swt_id = $this->uri->segment('3');
        $sql =  "UPDATE `std_work_time` SET `confirm`='1' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }
	public function save_arrive_time() 	
    {   
        $swt_id = $this->uri->segment('3');
        $data = $this->input->post('data');
        $sql =  "UPDATE `std_work_time` SET `arrive_time`='$data' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }
	public function save_depart_time() 	
    {   
        $swt_id = $this->uri->segment('3');
        $data = $this->input->post('data');
        $sql =  "UPDATE `std_work_time` SET `depart_time`='$data' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }
	public function save_note() 	
    {   
        $swt_id = $this->uri->segment('3');
        $data = $this->input->post('data');
        $sql =  "UPDATE `std_work_time` SET `note`='$data' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }
	public function reset_time() 	
    {   
        $swt_id = $this->uri->segment('3');
        $sql =  "UPDATE `std_work_time` SET `arrive_time`='',`depart_time`='' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }
	public function reset_note() 	
    {   
        $swt_id = $this->uri->segment('3');
        $sql =  "UPDATE `std_work_time` SET `note`='' WHERE  swt_id = '$swt_id'";
        $query = $this->db->query($sql); 
    }

    public function event_forteacher() 	
    {   
        $date = $this->input->post('date');
        $std_id = $this->input->post('std_id');
        if($this->uri->segment('3')){
            $std_id = $this->uri->segment('3');
        }
         $data['date'] = $date;
         $data['std_id'] = $std_id;
         $sql =  "SELECT * FROM `events` where DATE(start_event) =  '$date' and std_id = $std_id ORDER BY `events`.`start_event` ASC";
         $query = $this->db->query($sql); 
         $data['result'] = $query->result();
         $sql =  "SELECT * FROM event_img ";
         $query = $this->db->query($sql); 
         $data['result_img'] = $query->result();
		 $this->load->view('teacher/modal_data',$data);
        
    }

    public function event_forcontact() 	
    {   
        $date = $this->input->post('date');
        $std_id = $this->input->post('std_id');
        if($this->uri->segment('3')){
            $std_id = $this->uri->segment('3');
        }
         $data['date'] = $date;
         $data['std_id'] = $std_id;
         $sql =  "SELECT * FROM `events` where DATE(start_event) =  '$date' and std_id = $std_id ORDER BY `events`.`start_event` ASC";
         $query = $this->db->query($sql); 
         $data['result'] = $query->result();
         $sql =  "SELECT * FROM event_img ";
         $query = $this->db->query($sql); 
         $data['result_img'] = $query->result();
		 $this->load->view('contact/modal_data',$data);
        
    }
}
?>