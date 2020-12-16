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
         $sql =  "SELECT * FROM `events` where DATE(start_event) =  '$date' and std_id = $std_id ORDER BY `events`.`start_event` ASC";
         $query = $this->db->query($sql); 
         $data['result'] = $query->result();
		 $this->load->view('student/modal_data',$data);
        
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
		 $this->load->view('contact/modal_data',$data);
        
    }
}
?>