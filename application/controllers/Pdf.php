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
	}

	public function index()
	{
		$std_id = $this->session->userdata('std_id');
		$train_id = 13;
		$data['twd'] = $this->model_pdf->total_work_day($std_id,$train_id);
		$data['std_detail'] = $this->model_pdf->get_train_detail($train_id);
		// exit;
		require_once(APPPATH.'../vendor/autoload.php');	

		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('test',$data,true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}



}
