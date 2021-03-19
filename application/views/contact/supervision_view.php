
<style>
   .formfield * {
  vertical-align: top;
}
th{
    text-align:center;
}
input[type=radio] {
    border: 0px;
    width: 100%;
    height: 1.5em;
}
.panel-1{
background-color: #34495e;
border-color: #34495e;
}
.panel-2{
background-color: #16a085;
border-color: #16a085;
}
.panel-3{
background-color: #c0392b;
border-color: #c0392b;
}
.form-control {
width:auto;
display:inline-block;
}
</style>
<div id='wrap' >    
    <div class="container">
        <div class="row">
                <div class="panel panel-1">
                    <div class="panel-heading">
                            <h4>ประเมินการฝึกงาน </h4>
                    </div>
                     <div class="panel-body" style="padding: 10px;">
                     <div class="panel-body" style="padding: 20px;">
                                <div class="row">
                                     <div class="col-md-12 text-center" >
                                            <h4>ข้อมูลนักเรียน</h4>
                                     </div>
                                        <div class="col-md-2 header"></div>
                                        <div class="col-md-5 col-sm-6 header" >
                                        <?php  echo "ชื่อ ".$std_detail->title." ".$std_detail->fname." ".$std_detail->lname ?>
                                        </div>
                                        <div class="col-md-5 col-sm-6 header" >
                                            <?php echo "รหัสประจำตัวนักศึกษา ".$std_detail->std_code ?>
                                        </div>
                                        <div class="col-md-2 header"></div>
                                        <div class="col-md-5 col-sm-6 header" >
                                        <?php echo "ระดับชั้น ".$std_detail->class_name." ".$std_detail->class_group ?>
                                      </div>          
                                      <div class="col-md-5 col-sm-6 header" >
                                        <?php  echo "แผนกวิชาช่าง ".$std_detail->dv_name ?>
                                        </div>          
                                        <div class="col-md-2 header"></div>
                                        <div class="col-md-5 col-sm-6 header" >
                                        <?php echo "ระยะเวลาฝึกงาน ".$std_detail->start_date." ถึง ".$std_detail->end_date ?>
                                        </div>   
                                        <div class="col-md-5 col-sm-6 header" >
                                            <?php echo "สถานที่ฝึกงาน ".$std_detail->company_name ?>
                                        </div>     
                                </div>
                              </div>
                          <br>
                          <?php 
                          $url = $this->uri->segment('3'); ?>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead class="text-center">
                                    <th colspan="7" ><?php echo $result_spv->subject_name ?></th>
                                    <tr>
                                            <th colspan="2" >รายการประเมินผล</th>
                                            <th width="120px">มากที่สุุด</th>
                                            <th width="120px">มาก</th>
                                            <th width="120px">ปานกลาง</th>
                                            <th width="120px">น้อย</th>
                                            <th width="120px">น้อยที่สุด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 1;
                                    $j = 1;
                                  foreach($result as $r){ ?> 
                                    <tr>
                                    <td colspan="7" width='25px'><b><?php echo $r->glist_name ?></b></td>
                                    <?php 
                                    foreach($result_list as $rl){
                                          if($r->glist_id==$rl->glist_id){ ?>
                                          <tr>
                                            <td colspan="2"><?php echo  $j.". ".$rl->list_name ?></td>
                                            <td  class="text-center"><?php if($rl->score == 5)echo "/" ;else ?></td>
                                            <td  class="text-center"><?php if($rl->score == 4)echo "/" ;else ?></td>
                                            <td  class="text-center"><?php if($rl->score == 3)echo "/" ;else ?></td>
                                            <td  class="text-center"><?php if($rl->score == 2)echo "/" ;else ?></td>
                                            <td  class="text-center"><?php if($rl->score == 1)echo "/" ;else ?></td>
                                            <?php 
                                            $i++;
                                            $j++;
                                          } ?>
                                        </tr>
                                  <?php 
                                   } ?> 
                                    </tr>

                                      <?php
                                  }
                                    ?>
                                </tbody>
      
                                </table>
                                <div class="footer">
                                    <b>ข้อเสนอแนะ/ติชม</b>
                                    <span><?php echo $result_spv->suggestion ?></span>
                                        <div class="text-center">
                                        <p>ผู้ประเมิน <?php echo $std_detail->name ?></p>
                                        <p>ตำแหน่ง <?php echo $result_spv->position ?></p>
                                        <p>วันที่ <?php echo $date ?></p>
                                        </div>
                                </div>
                                <?php $url = $this->uri->segment('4'); ?>
                                </table>
                                <div class="text-center">
                                    <button onclick="window.history.back();" class="btn btn-default">กลับ</button>
                                    <a href="<?php echo base_url()."pdf/view/$url"?>"><button class="btn btn-green">ดาวน์โหลดเอกสาร</button></a>
                                </div>

                    </div>
            </div>
        </div>
    </div>



