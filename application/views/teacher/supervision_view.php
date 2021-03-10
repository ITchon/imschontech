
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
                          <br>
                          <?php 
                          $url = $this->uri->segment('3');
                          if($result != null) { ?>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead class="text-center">
                                    <th colspan="6" ><?php echo $result_spv->subject_name ?></th>
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
                              foreach($result as $r){ 
                                  ?> 
                                <tr>
                                <td width='25px'><?php echo $i ?></td>
                                <td><?php echo $r->glist_name?></td>
                                <td  class="text-center"><?php if($r->score == 4)echo "/" ;else ?></td>
                                <td  class="text-center"><?php if($r->score == 3)echo "/" ;else ?></td>
                                <td  class="text-center"><?php if($r->score == 2)echo "/" ;else ?></td>
                                <td  class="text-center"><?php if($r->score == 1)echo "/" ;else ?></td>
                                </tr>

                                  <?php
                                $i++;
                              }
                                ?>
                                </tbody>
      
                                </table>
                                <div class="text-center">
                                    <button class="btn btn-default">กลับ</button>
                                    <button class="btn btn-primary">ดาวน์โหลดเอกสาร</button>
                                </div>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>



