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
        $this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal');
	}
    public function insert_sub()
	{
		$sub_name    = $this->input->post('sub_name'); 
		$sub_type    = $this->input->post('sub_type'); 
        
        $this->assessment_model->insert_sub($sub_name,$sub_type); 
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

		$this->load->view('ADMIN FOR ADMIN/assessment/edit_subject',$data);
        $this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal');
		// $this->load->view('ADMIN FOR ADMIN/assessment/edit_modal',$data);
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

	public function delete($subject_id)
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
        $sub_id 	  = $this->input->post('sub_id');
		$g_list    = $this->input->post('g_list'); 
        $last_id = $this->assessment_model->add_grouplist($g_list);
        $res = $this->assessment_model->add_glist_sub($sub_id,$last_id);
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
    public function sj_delete()
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
    public function edit_glist()
	{
        $id = $this->uri->segment('3'); 
        $data['result_glist'] = $this->assessment_model->selectOneglist($id);
        $data['result_list'] = $this->assessment_model->getlist($id);

		$this->load->view('ADMIN FOR ADMIN/assessment/edit_glist',$data);
    }
    public function update_glist()
	{
        if($this->input->post('glist_id'))
        {
          $res = $this->assessment_model->del_glist($this->input->post('glist_name')); 
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

    public function edit_glist_name()
	{
		$glist_name    = $this->input->post('glist_name'); 
	    $glist_id 	  = $this->input->post('glist_id');

        $this->assessment_model->update_glist_name($glist_name ,$glist_id); 
        $this->session->set_flashdata('success','<div class="alert alert-success hide-it">  
          <span> Change Success</span>
        </div> ');
		    echo "<script>";
            echo 'history.go(-1);';
            echo '</script>';
	}

    public function add_list()
	{
        $glist_id 	  = $this->input->post('glist_id');
		$list    = $this->input->post('list'); 
        $last_id = $this->assessment_model->add_list($list);
        $res = $this->assessment_model->add_glist_list($glist_id,$last_id);
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

    public function delete_glist_list()
	{
        if($this->input->post('glist_id'))
        {
          $this->assessment_model->del_glist_list($this->input->post('glist_id'),$this->input->post('list_id')); 
          $res = $this->assessment_model->del_list($this->input->post('list_id')); 
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
    public function edit_list()
	{
        $id = $this->uri->segment('3'); 
        $data['result_list'] = $this->assessment_model->selectOnelist($id);

		$this->load->view('ADMIN FOR ADMIN/assessment/edit_list',$data);
    }

    public function edit_list_name()
	{
		$list_name    = $this->input->post('list_name'); 
	    $list_id 	  = $this->input->post('list_id');
        $this->assessment_model->update_list_name($list_name ,$list_id); 
        $this->session->set_flashdata('success','<div class="alert alert-success hide-it">  
          <span> Change Success</span>
        </div> ');
		    echo "<script>";
            echo 'history.go(-1);';
            echo '</script>';
	}
}

?>
