
<style>

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
		<div class="container">
			<div class="row">
					<div class="panel panel-1">
                        <div class="panel-heading">
                                <h4>ประเมินการฝึกงาน </h4>
                        </div>
                        <div class="panel-body" style="padding: 10px;">
                        <div class="panel-body" style="padding: 10px;">
                              <form action="" method="post">
                                <div class="form-group">
                                    <span>เลือกแบบประเมิน </span>
                                    <select name="train_id" class="selectpicker form-control" id="subject_id">
                                    <?php foreach($result_train as $rt){ 
                                        ?>
                                                <option value="<?php echo $rt->t_id ?>"><?php echo $rt->end_date ?></option>
                                    <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>เลือกแบบประเมิน </span>
                                    <select name="subject_id" class="selectpicker form-control" id="subject_id">
                                    <?php foreach($result_spv as $rp){ 
                                        ?>
                                                <option value="<?php echo $rp->subject_id ?>"><?php echo $rp->subject_name ?></option>
                                    <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                    <input type="submit" class="btn btn-primary" value="ค้นหา">
                              </form>
                              </div>

                              <br>
                              <?php 
                              $url = $this->uri->segment('3');
                              if($result != null) { ?>
                              <form action="<?php echo base_url()."teacher/supervision_save/$url" ?>" method="post">
                                <input type="hidden" name="subject_id" value="<?php echo $subject_id ?>">
                                <input type="hidden" name="train_id" value="<?php echo $train_id ?>">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                    <thead class="text-center">
                                        <th colspan="6" ><?php echo $subject_name ?></th>
                                        <tr>
                                            <th colspan="2" >รายการประเมินผล</th>
                                            <th width="120px">ดีมาก</th>
                                            <th width="120px">ดี</th>
                                            <th width="120px">พอใช้</th>
                                            <th width="120px">ปรับปรุง</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 1;
                                  foreach($result as $r){ ?> 
                                    <tr>
                                    <td width='25px'><?php echo $i ?></td>
                                    <td><?php echo $r->glist_name?></td>
                                    <td  class="text-center"><input type="radio" value="4<?php echo $r->glist_id?>" name="<?php echo $i?>" id=""></td>
                                    <td  class="text-center"><input type="radio" value="3<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                    <td  class="text-center"><input type="radio" value="2<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                    <td  class="text-center"><input type="radio" value="1<?php echo $r->glist_id?>"name="<?php echo $i?>" id=""></td>
                                    </tr>

                                      <?php
                                    $i++;
                                  }
                                    ?>
                                    </tbody>
          
                                    </table>
                                    <div class="text-center">
                                    <input type="hidden" name="max" value="<?php echo $i-1?>">
                                    <input type="submit" class="btn btn-primary" value="บันทึก">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                </div>
            </div>
        </div>



