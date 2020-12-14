<?php
public function export_excel()
 {
        // load excel library
        $this->load->library('Excel');
    $results = $this->Student->read(0, 100000);//1000 คือจำนวนข้อมูลที่ต้องการสูงสุด
  $data_lists = $this->setDataListFormat($results['list_data'], 0);
          $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
     
    // set Header
  $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'รหัสประจำตัว');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'ชื่อ-นามสกุล');   
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'เพศ');
    // set header bold
  $objPHPExcel->getActiveSheet()->getStyle("A1:C1")->getFont()->setBold( true );
               // set Row
        $rowCount = 2;
        foreach ($data_lists as $row) {
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('A' . $rowCount, $row['student_code'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $row['preview_prefix_name'].$row['firstname'].' '.$row['lastname']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $row['preview_sex']);
               $rowCount++;
        }
    // auto size
  foreach(range('A','C') as $columnID) {
   $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)
    ->setAutoSize(true);
  }
          $filename = "student_". date("Y-m-d-H-i-s").".xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
          $objWriter->save('php://output');
    }
}?>