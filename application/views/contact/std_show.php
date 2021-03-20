<style>

    .student_detail{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .panel-heading-bigger{
        
        font-size: 30px;
        border-bottom: 1px solid #dddddd;
        border-top-right-radius: 1px;
        border-top-left-radius: 1px;
        height: 90px;
        line-height: 3em;
    }
    .fa-check{
        color: green;
    }


        table.dataTable th,
        table.dataTable td {
            white-space: nowrap;
        }
</style>
<?php  $subject_id =  $this->uri->segment('3'); ?>
<div id="page-content">
<div id='wrap' >
<div class="container" style="min-height: 752px;background-color:#ffffff">
    <div class="row"> 

      <div class="col-md-12">
      <div id="page-heading">
        <h2>รายชื่อนักเรียน</h2>

            <div class="col-md-6">
					        <a class="info-tiles tiles-green" >
					            <div class="tiles-heading">
					                <div class="pull-left"><span style=" font-size: 18px;">มีนักเรียนที่กำลังฝึกงานอยู่ทั้งหมด</span></div>
					            </div>
					            <div class="tiles-body text-center">
                                     <?php echo $total ?>
					            </div>
					        </a>
					    </div>
 
              
        </div>

   
                <div class="panel panel-midnightblue">
                    <div class="panel-heading">
                    <?php if(isset($result)){
                          echo "รายชื่อนักเรียนที่กำลังออกฝึกงาน";
                     }else{
                     echo "No Data";
                 } ?>
                     </div>
                    <div class="panel-body">
                    
                    <div class="table-responsive">
                    <?php echo $this->session->flashdata("success");  ?>
                    <table cellpadding="0" cellspacing="0" border="0" class="table  datatables" id="example">
                          <thead >
                            <tr>
                              <th>บริษัท</th>
                              <th>ชื่อ</th>
                              <th>รหัสนักเรียน</th>
                              <th>แผนก</th>
                              <th>กลุ่ม</th>
                              <th>ภาคเรียน</th>
                              <th>วันที่เริ่มฝึก</th>
                              <th>วันที่สิ้นสุด</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($result != null){ foreach($result as $r){ 
                                
                                ?>
                                <tr>
                              <td><?php echo $r->company_name ?></td>
                              <td><?php echo $r->title." ".$r->fname." ".$r->lname ?></td>
                              <td><?php echo $r->std_code ?></td>
                              <td><?php echo $r->dv_name ?></td>
                              <td><?php echo $r->class_name." ".$r->class_group ?></td>
                              <td><?php echo $r->term ?></td>
                              <td><?php echo $r->start_date ?></td>
                              <td><?php echo $r->end_date ?></td>
                              <td>
                                 <a href='<?php echo base_url()."contact/std_data/$r->std_id"?>'><button class='btn btn-info'>ดูรายละเอียด</button></a>
                              </td>
                            </tr>
                              <?php }}  ?>
                           
                          </tbody>
                        </table>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
