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
    .fa-ban{
        color: red;
    }
</style>
<div id='wrap' >

    <div class="row">
		<div class="col-md-12">
			<div class="panel panel-default" >
			<div class="panel-body" style="min-height: 752px;">
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
                              <th class="text-center"></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($result != null){ foreach($result as $r){ ?>
                                <tr>
                              <td><?php echo $r->company_name ?></td>
                              <td><?php echo $r->title." ".$r->fname." ".$r->lname ?></td>
                              <td><?php echo $r->std_code ?></td>
                              <td><?php echo $r->dv_name ?></td>
                              <td><?php echo $r->class_name." ".$r->class_group ?></td>
                              <td><?php echo $r->term ?></td>
                              <td><?php echo $r->start_date ?></td>
                              <td><?php echo $r->end_date ?></td>
                              <?php 
                                $subject_id =  $this->uri->segment('3');
                              echo "<td class='text-center'>
                              <a href='".base_url()."Teacher/std_data/".$r->std_id."'><button class='btn btn-info'>ดูรายละเอียด</button></a>
                              <a href='".base_url()."Teacher/supervision_insert/".$r->std_id."/".$subject_id."'><button class='btn btn-brown'>ประเมิน</button></a>
                            
                              </td>";  ?>
                            </tr>
                              <?php }}else{
                                  echo "No Data";
                              }  ?>
                           
                          </tbody>
                        </table>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
