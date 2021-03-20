<div id="page-content">
<div id='wrap' >
        <div class="container" style="min-height: 752px;background-color:#ffffff" >
        <div id="page-heading">


                <h2>บันทึกการปฏิบัติงาน</h2>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h4>รายชื่อนักศึกษา</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table datatables" style="margin-bottom: 0px;" id="example">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th width="10%">ชื่อ</th>
                                            <th width="15%">แผนก</th>
                                            <th width="15%">บริษัท</th>
                                            <th width="20%">รายการ</th>
                                            <th>วันที่</th>
                                            <th class="text-center" width="10%">-</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                    <?php 
												$sum = 0;
												$std_chk =0;
												$contact_chk =0;
											foreach($result_test as $row){
                                                $name = $row->title.$row->fname." ".$row->lname;
												$dt = new DateTime($row->date);
												$date = $dt->format('Y-m-d');
												$time = $dt->format('H:i:s');
												$std_chk++;
												?>
												<tr>
                                                <td><input type="checkbox" id="select-all"></td>
                                                <td><?php echo $name ?></td>
                                                <td><?php echo $row->dv_name ?></td>
                                                <td><?php echo $row->company_name ?></td>
												<td>
												<?php foreach($result as $r){
                                                    $dt = new DateTime($r->start_event);
                                                    $date_event = $dt->format('Y-m-d');
                                                    $time = $dt->format('H:i:s');
                                                    if($date == $date_event){
                                                        if($row->std_id == $r->std_id){
                                                            echo $r->title."  ";
                                                          }
                                                    }
												} ?>
												</td>
                                                <td><?php echo $date ?></td>

												
												<td>
												<!-- <button data-id='<?php echo $row->std_id?>' type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
												</button> -->
                                 <a href='<?php echo base_url()."teacher/std_internbook/$r->std_id"?>'><button class='btn btn-info'>ดูรายละเอียด</button></a>

                                                <!-- <input id="std_id" type="text" name="std_id" value="<?php echo $row->std_id?>"> -->
												</td>
												</tr>
												<?php
												$sum++;
													}
														
													  ?> 
                                                    
	              	                    			</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
$(document).ready(function(){
 	var teacher_chk = $('#teacher').val();

 	var sum = $('#sum').val();
	 $('#overall-teacher').html("Total : "+teacher_chk);
	//  $('#overall-contact').html("Company : "+company_chk+"/"+sum);
});
$(".open-modal").click(function() {
	var date = $(this).val();
    var std_id = $(this).data("id") 
	 $.ajax({
		url: "<?php
					 echo base_url("crud/event_forteacher/");
					 ?>",  
    			type: "POST",
    			cache: false,
    			data:{
					date: date,
					std_id:std_id
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
