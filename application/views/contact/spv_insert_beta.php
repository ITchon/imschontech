
<style>
   .formfield * {
  vertical-align: top;
}
    .header{
        padding:10px;
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
<div id="wrap">
			<div class="row">
            <div class="col-md-12">
			<div class="panel panel-default" >
			<div class="panel-body" style="min-height: 752px;">
					<div class="panel panel-1">
                        <div class="panel-heading">
                                <h4>ประเมินการฝึกงาน </h4>
                        </div>
                        <div class="panel-body" style="padding: 10px;">
                       
                      <?php if($std_detail != null) { ?>
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
                              <?php } ?>
                              <?php 
                              $url = $this->uri->segment('3');
                              if($result != null) { ?>
                              <form action="<?php echo base_url()."contact/supervision_save/$url" ?>" method="post">
                                <input type="hidden" name="subject_id" value="<?php echo $subject_id ?>">
                                <input type="hidden" name="train_id" value="<?php echo $train_id ?>">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered " id="example">
                                    <thead class="text-center">
                                        <th colspan="7" ><h4><?php echo $subject_name ?></h4></th>
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
                                    <td colspan="6" width='25px'><b><?php echo $r->glist_name ?></b></td>
                                    <?php 
                                    foreach($result_list as $rl){
                                          if($r->glist_id==$rl->glist_id){ ?>
                                          <tr>
                                            <td colspan="2"><?php echo  $j.". ".$rl->list_name ?></td>
                                            <td  class="text-center"><input required type="radio" value="5<?php echo $rl->list_id?>"name="<?php echo $j?>" id=""></td>
                                            <td  class="text-center"><input required type="radio" value="4<?php echo $rl->list_id?>"name="<?php echo $j?>" id=""></td>
                                            <td  class="text-center"><input required type="radio" value="3<?php echo $rl->list_id?>"name="<?php echo $j?>" id=""></td>
                                            <td  class="text-center"><input required type="radio" value="2<?php echo $rl->list_id?>"name="<?php echo $j?>" id=""></td>
                                            <td  class="text-center"><input required type="radio" value="1<?php echo $rl->list_id?>"name="<?php echo $j?>" id=""></td>
                                            <?php 
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
                                    <div class="text-center">
                                        <div class="form-group">
                                             <div class="col-md-12">
                                            <label for="textarea"><h4>ข้อเสนอแนะ / ติชม</h4> </label><br>
                                            <textarea id="textarea" name="suggest" class="form-control" cols="50" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="position"><h4>ตำแหน่ง</h4> </label>
                                            <input type="text" class="form-control" name="position" id="position">
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" name="max" value="<?php echo $j-1 ?>">
                                        <input type="submit" class="btn btn-primary" value="บันทึก">
                                      </div>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                </div>
            </div>
        </div>



