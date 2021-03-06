<?php

	class Student extends CI_Controller {



		function __construct(){
			parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');  
      $this->load->database();  
      $this->load->model('model');
      $this->load->model('student_model');
      $this->model->CheckSession();

		}
    function index()
    {
    redirect("student/view/");
    }
    function redirect()
    {
      $t_id = $this->input->post("train_id");
      $url = $this->input->post("url");
      redirect("student/$url/$t_id");
    }

    function calendar(){
      $std_id =  $this->session->userdata('std_id');
      $train_id = $this->uri->segment('3'); 
      $data['train_id'] = $train_id;
      $data['train_select'] = $this->student_model->get_train($std_id);
      $this->load->view('student/header');
      $this->load->view('student/menu'); 
      $this->load->view('student/select_train',$data);

      if($this->uri->segment('3')){
          $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
          if($data['train_detail']){
              $data['start_date'] = $data['train_detail'][0]->start_date;
              $data['end_date'] = $data['train_detail'][0]->end_date;
              $this->load->view('student/calendar',$data);
              $this->load->view('student/modal_img');
          }
      }

    }
    function profile(){
      $std_id =  $this->session->userdata('std_id');
      $train_id = $this->uri->segment('3'); 
      $data['train_id'] = $train_id;
      $data['train_select'] = $this->student_model->get_train($std_id);
      $this->load->view('student/header');
      $this->load->view('student/menu'); 
      $this->load->view('student/select_train',$data);

      $data['result'] = $this->student_model->get_student($std_id,$train_id);
      $this->load->view('student/profile',$data);
      $this->load->view('student/footer');

    }
    function file(){
      $std_id =  $this->session->userdata('std_id');
      $train_id = $this->uri->segment('3'); 
      $data['train_id'] = $train_id;
      $data['train_select'] = $this->student_model->get_train($std_id);
      $this->load->view('student/header');
      $this->load->view('student/menu'); 
      $this->load->view('student/select_train',$data);
      if($this->uri->segment('3')){
      $sql="SELECT  * FROM  subject s ";
      $query = $this->db->query($sql); 
      $data['result_subject']  = $query->result(); 
      $this->load->view('student/file',$data);
      }
      $this->load->view('student/footer');

    }
    function view(){
      $std_id =  $this->session->userdata('std_id');
      $train_id = $this->uri->segment('3'); 
      $data['train_id'] = $train_id;
      $data['train_select'] = $this->student_model->get_train($std_id);
      $this->load->view('student/header');
      $this->load->view('student/menu');  
      $this->load->view('student/select_train',$data);
      
      if($this->uri->segment('3')){
      $train_id = $this->uri->segment('3'); 
      $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
      if($data['train_detail']){
        $start_date = $data['train_detail'][0]->start_date;
        $end_date = $data['train_detail'][0]->end_date;
        $sql =  "SELECT * FROM `events`WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id'";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result();
        $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' ORDER BY `events`.`start_event` DESC";
        $query = $this->db->query($sql); 
        $data['result_test'] = $query->result();
        $latlong = $data['train_detail'][0]->latlong;
        if($latlong == null){
          $latlong = ',';
        }
        $this->load->library('Googlemaps');
        $config['center'] = $latlong;
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] =  $latlong;
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('student/modal');
        $this->load->view('student/dashboard', $data);
        }
      }
      $this->load->view('student/footer');
    }
    
    function map(){
      $this->load->library('Googlemaps');
      $config['center'] = '37.4419, -122.1419';
      $config['zoom'] = 'auto';
      $this->googlemaps->initialize($config);
      $marker = array();
      $lat = '13.4538667';
      $long ='101.1025658'; 
      $marker['position'] = $lat.','.$long;
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();
      $this->load->view('student/dashboard', $data);
    }
    
    function error(){
      $this->load->view('student/footer');
      $this->load->view('student/header');
      $this->load->view('student/error');
    }





  //   public function export_excel() {

  //       // load excel library
  //       $this->load->library('Excel');
  //   $results = $this->Student->read(0, 100000);//1000 คือจำนวนข้อมูลที่ต้องการสูงสุด
  // $data_lists = $this->setDataListFormat($results['list_data'], 0);
  //         $objPHPExcel = new PHPExcel();
  //       $objPHPExcel->setActiveSheetIndex(0);
     
  //   // set Header
  // $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'รหัสประจำตัว');
  //       $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'ชื่อ-นามสกุล');   
  //       $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'เพศ');
  //   // set header bold
  // $objPHPExcel->getActiveSheet()->getStyle("A1:C1")->getFont()->setBold( true );
  //              // set Row
  //       $rowCount = 2;
  //       foreach ($data_lists as $row) {
  //       $objPHPExcel->getActiveSheet()->setCellValueExplicit('A' . $rowCount, $row['student_code'], PHPExcel_Cell_DataType::TYPE_STRING);
  //       $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $row['preview_prefix_name'].$row['firstname'].' '.$row['lastname']);
  //       $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $row['preview_sex']);
  //              $rowCount++;
  //       }
  //   // auto size
  // foreach(range('A','C') as $columnID) {
  //  $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
  //   ->setAutoSize(true);
  // }
  //         $filename = "student_". date("Y-m-d-H-i-s").".xlsx";
  //       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  //       header('Content-Disposition: attachment;filename="'.$filename.'"');
  //       header('Cache-Control: max-age=0');
  //       $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
  //         $objWriter->save('php://output');
  //   }



}

?>