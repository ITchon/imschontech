<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Ajax extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_ajax');

    }
 
 
 public function get_by_usergroup()
    {
       
     if($this->input->post('usergroup'))
     {
      echo $this->model_ajax->fetch_user($this->input->post('usergroup'));
     }
    }
 
    public function delete()
    {
        $this->model->delete();
        echo json_encode(array("status" => TRUE));
    }

 
 
}