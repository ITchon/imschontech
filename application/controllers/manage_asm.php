<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_asm Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('assessment_model');
		$this->load->model('model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM subject";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $data['result_g'] = $this->contact_model->teacher();
		$this->load->view('ADMIN FOR ADMIN/assessment/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
	
	}
    public function insert_sub()
	{
		$sub_name    = $this->input->post('sub_name'); 
        
        $this->assessment_model->insert_sub($sub_name); 
        redirect('manage_asm');
	}
    public function edit_subject()
	{	
		// $qry_inp =  "SELECT * FROM division";
        // $query = $this->db->query($qry_inp); 
		// $data['result'] = $query->result();
		$id = $this->uri->segment('3'); 
        $data['result_sub'] = $this->assessment_model->selectOnesubject($id);
        $data['result_glist'] = $this->assessment_model->getsubgrouplist($id);

		$this->load->view('ADMIN FOR ADMIN/assessment/edit',$data);
		$this->load->view('ADMIN FOR ADMIN/assessment/edit_modal',$data);
		// $this->load->view('ADMIN FOR ADMIN/footer_2020');
	}

	public function edit_subname()
	{
		$sub_name    = $this->input->post('sub_name'); 
       
	    $subject_id 	  = $this->input->post('subject_id');
        $this->assessment_model->update_subname($sub_name ,$subject_id); 
        $this->session->set_flashdata('success','<div class="alert alert-success hide-it">  
          <span> Change Success</span>
        </div> ');
		    echo "<script>";
            echo 'history.go(-1);';
            echo '</script>';
	}

	public function delete_subject($subject_id)
	{
		$result = $this->assessment_model->del_sub($subject_id);
		if($result!=FALSE)
		{
            redirect('manage_asm','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_asm','refresh');
		}
    }
    public function add_grouplist()
	{
        $subject_id 	  = $this->input->post('subject_id');
		$g_list    = $this->input->post('g_list'); 
        $last_id = $this->assessment_model->add_grouplist($g_list);
        $this->assessment_model->add_glist_sub($subject_id,$last_id);
        redirect('manage_asm/edit_subject/'.$subject_id.'','refresh');
	}
    public function get_onegrouplist()
    {
        $id = $this->input->post('id');
        $data = $this->assessment_model->get_onegrouplist($id);
        $arr = array('success' => false, 'data' => '');
        if($data){
            $arr = array('success' => true, 'data' => $data);
            }
        echo json_encode($arr);

    }
    public function delete_subglist()
	{
        if($this->input->post('sub_id'))
        {
          $this->assessment_model->del_sub_glist($this->input->post('sub_id'),$this->input->post('glist_id')); 
          $res = $this->assessment_model->del_glist($this->input->post('glist_id')); 
          if($res != false){
               echo json_encode(array(
               "statusCode"=>200
           ));
          }else{
               echo json_encode(array(
               "statusCode"=>100
           ));
          }
   
        }
    }
}

?>
