
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
<style>


        .comment {
            float: left;
            width: 100%;
            height: auto;
        }

        .commenter {
            float: left;
        }

        .commenter img {
            width: 35px;
            height: 35px;
        }

        .comment-text-area {
            float: left;
            width: 100%;
            height: auto;
        }

        .textinput {
            float: left;
            width: 100%;
            min-height: 75px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }
    </style>
<div id='wrap' >
    <div class="container" style="min-height: 752px;background-color:#ffffff">
        <div class="row">
                <div class="panel panel-1">
                    <div class="panel-heading">
                            <h4>ประเมินการฝึกงาน </h4>
                    </div>
                     <div class="panel-body" style="padding: 10px;">
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
                          <br>
                          <?php 
                          $url4 = $this->uri->segment('4');
                          $url3 = $this->uri->segment('3');
                          if($result != null) { ?>
                     <form action="<?php echo base_url()."teacher/supervision_save_edit_th/$url3/$url4" ?>" method="post">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered " id="example">
                                <thead class="text-center">
                                    <th colspan="6" ><?php echo $result_spv->subject_name ?></th>
                                    <tr>
                                        <th colspan="2" >รายการประเมินผล</th>
                                        <!-- <th width="120px">ดีมาก</th> -->
                                        <th width="120px">ดี</th>
                                        <th width="120px">พอใช้</th>
                                        <th width="120px">ปรับปรุง</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                              foreach($result as $r){ 
                                  ?> 
                                <tr>
                                    <td width='25px'><?php echo $i ?></td>
                                    <td><?php echo $r->glist_name?></td>
                                    <!-- <td  class="text-center"><?php if($r->score == 4)echo "/" ;else ?></td> -->
                                    <td  class="text-center"><input <?php if($r->score == 3)echo "checked" ?> required type="radio" value="3<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                    <td  class="text-center"><input <?php if($r->score == 2)echo "checked" ?> required type="radio" value="2<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                    <td  class="text-center"><input <?php if($r->score == 1)echo "checked" ?> required type="radio" value="1<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                </tr>

                                  <?php
                                $i++;
                              }
                                ?>
                                </tbody>
      
                                </table>
                                <label for="textarea"><h4>สรุปผลการนิเทศ</h4> </label><br>
                                              <textarea class="textinput" name="summarize" placeholder="" value="ddasdasd"><?php echo $result_spv->summarize ?></textarea>
                                             <div class="text-center">
                                          <input type="hidden" name="max" value="<?php echo $i-1?>">
                                          <input type="hidden" name="spv_id" value="<?php echo $result_spv->spv_teacher_id ?>">
                                          <button onclick="window.history.back();" class="btn btn-default">กลับ</button>
                                          <input type="submit" class="btn btn-success" value="บันทึก">
                                          
                                             </div>

                                             </form>

                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>



