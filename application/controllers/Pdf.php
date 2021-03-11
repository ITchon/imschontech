<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('student_model');
        $this->load->model('model_pdf');
        $this->load->model('model_spv');
	}

	public function view()
	{
		$spv_id =  $this->uri->segment('3');
		$std_id = $this->session->userdata('std_id');
		$sql="SELECT  * FROM `supervision_contact` sc
        inner join subject s on s.subject_id = sc.subject_id
        where spv_contact_id = '$spv_id'";
        $query = $this->db->query($sql); 
		$data['result_spv']  = $query->row(); 
		$data['result'] = $this->model_spv->get_spv_data($spv_id);
		$data['date'] = $this->model->Thai_date($data['result_spv']->approve_date);
		$data['twd'] = $this->model_pdf->total_work_day($std_id,$data['result_spv']->t_id);
		// print_r($data['twd']);exit;
		$data['std_detail'] = $this->model_pdf->get_train_detail($data['result_spv']->t_id);
		// exit;
		require_once(APPPATH.'../vendor/autoload.php');	

		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('test',$data,true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}



}
