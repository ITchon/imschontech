  <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-container tab-success">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile1" data-toggle="tab">เวลาการปฎิบัติงาน</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane clearfix" id="home1">
                            <div class="col-md-12">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                                <thead class="bg-primary">
                                      <tr>
                                          <th width="100px">วันที่</th>
                                          <th width="200px">หัวข้อการปฎิบัติงาน</th>
                                          <th width="100px" class="text-center" id="overall-teacher"></th>
                                          <th width="100px" class="text-center" id="overall-contact"></th>
                                          <th width="3%"> - </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                    <?php 
                            $sum = 0;
                            $tch_chk =0;
                            $contact_chk =0;
                        foreach($result_test as $row){
                            $dt = new DateTime($row->date);
                            $date = $dt->format('Y-m-d');
                            $time = $dt->format('H:i:s');
                            ?>
                            <tr>
                            <td><?php echo $date ?></td>
                            <td>
                            <?php foreach($result as $r){
                        
                                    $dt = new DateTime($r->start_event);
                                    $date_event = $dt->format('Y-m-d');
                                    $time = $dt->format('H:i:s');
                                    if($date == $date_event){
                                        echo $r->title."  ";
                                    }
                            } ?>
                            </td>
                            <td class="text-center">
                            <?php
                            $a = [];
                             foreach($result as $r){
                        
                                    $dt = new DateTime($r->start_event);
                                    $date_event = $dt->format('Y-m-d');
                                    $time = $dt->format('H:i:s');
                                    if($date == $date_event){
                                        array_push($a,$r->teacher_confirm);
                                    }
                            }
                            
                            if (in_array("1", $a))
                              { 
                                $tch_chk++;
                                echo "<span style='color:#44c748'>ยืนยันเรียบร้อย</span>";
                              }
                              else if(in_array("2", $a)){
                                echo "<span style=''>ปฎิเสธการยืนยัน</span>";
                              }
                            else
                              {
                                echo "<span style='color:#fe0000'>รอยืนยัน</span>";
                              
                              }
                            ?> 
                            </td>
                            <td class="text-center">
                            <?php
                            $a = [];
                            foreach($result as $r){
                        
                                    $dt = new DateTime($r->start_event);
                                    $date_event = $dt->format('Y-m-d');
                                    $time = $dt->format('H:i:s');
                                    if($date == $date_event){
                                        array_push($a,$r->contact_confirm);
                                    }
                            } 
                            if (in_array("1", $a))
                              {
                                $contact_chk++;
                                echo "<span style='color:#44c748'>ยืนยันเรียบร้อย</span>";
                              }
                              else if(in_array("2", $a)){
                                echo "<span style='color:#00000'>ปฎิเสธการยืนยัน</span>";
                              }
                            else
                              {
                                echo "<span style='color:#fe0000'>รอยืนยัน</span>";
                              
                              }
                            ?>
                            </td>
                            <td>
                            <button type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
                                        <i class="ace-icon fa fa-search bigger-120"></i>
                            </button>
                            </td>
                            </tr>
                            <?php
                            $sum++;
                                }
                                    
                                  ?> 
                                
                                  </tbody>
                                  <!-- Overall Chk -->
                                <input type="hidden" id="teacher" value="<?php echo $tch_chk ?>">
                                <input type="hidden" id="company" value="<?php echo $contact_chk ?>">
                                <input type="hidden" id="sum" value="<?php echo $sum ?>">
                                  <!---------------------------- -->

                            </table>
                            </div>

                            
                        </div>
                        
                          <div class="tab-pane active" id="profile1">
                            <input type="hidden" name="" id="t_id" value="<?php echo $train_id ?>">
                            <div id="work-time-data"></div>
                          </div>
                      </div>
                </div>
            </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
var t_id = $('#t_id').val();
$.ajax({
url: "<?php
$std_id = $this->session->userdata('std_id');
 echo base_url("crud/std_work_time/$std_id");
 ?>",  
type: "POST",
cache: false,
data:{
t_id: t_id
},
success: function(data){		
console.log(data);
$('#work-time-data').html(data);
},
error:function(data){
console.log(data);
// $('#event_detail').modal();


}
});
var teacher_chk = $('#teacher').val();
var company_chk = $('#company').val();
var sum = $('#sum').val();
$('#overall-teacher').html("อาจารย์นิเทศ : "+teacher_chk+"/"+sum);
$('#overall-contact').html("ผู้ควบคุมการฝึกงาน : "+company_chk+"/"+sum);
});

$(".open-modal").click(function() {
var date = $(this).val();
$.ajax({
url: "<?php
$std_id = $this->session->userdata('std_id');
 echo base_url("crud/event/$std_id");
 ?>",  
type: "POST",
cache: false,
data:{
date: date
},
success: function(data){		
$('#event_detail').modal();
$('#data_body').html(data);
$('#text_header').html($("#Textheader").val());//modal head


//  console.log(data);
},
error:function(data){
// console.log(data);
// $('#event_detail').modal();


}
});
});



</script>