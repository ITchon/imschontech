<div id="page-content">
<div id='wrap' >
        <div class="container" style="min-height: 752px;background-color:#ffffff" >
        <div id="page-heading">

<div class="col-md-6">
               <a class="info-tiles tiles-green" >
                   <div class="tiles-heading">
                       <div class="pull-left"><span style=" font-size: 18px;">กำลังฝึกงานอยู่ทั้งหมด</span></div>
                   </div>
                   <div class="tiles-body text-center">
                      <?php echo $my_slave; ?>
                   </div>
               </a>
           </div>
 <div class="col-md-6">
               <a class="info-tiles tiles-brown" >
                   <div class="tiles-heading">
                       <div class="pull-left"><span style=" font-size: 18px;">ยืนยันบันทึกการปฏิบัติงานทั้งหมด</span></div>
                   </div>
                   <div class="tiles-body text-center">
                   <?php echo $mywork_salve."/".$myworkmax_salve; ?>
                   </div>
               </a>
           </div>
 


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
                                            <th width="10%"><input type="checkbox" id="select-all"></th>
                                            <th width="20%">ชื่อ</th>
                                            <th width="20%">แผนก</th>
                                            <th width="20%">บริษัท</th>
                                            <th width="20%">อาจารย์นิเทศ</th>
                                            <th class="text-center" width="20%">-</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                    <?php 
												$sum = 0;
												$std_chk =0;
												$contact_chk =0;
											foreach($result_test as $row){
                                                $std_name = $row->title.$row->fname." ".$row->lname;
                                                $teacher_name = $row->cth_title.$row->cth_fname." ".$row->cth_lname;

												$std_chk++;
												?>
												<tr>
                                                <td><input type="checkbox" id="select-all"></td>
                                                <td><?php echo $std_name ?></td>
                                                <td><?php echo $row->dv_name ?></td>
                                                <td><?php echo $row->company_name ?></td>
                                                <td><?php echo $teacher_name ?></td>

												
												<td>
												<!-- <button data-id='<?php echo $row->std_id?>' type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
												</button> -->
                                                <a href='<?php echo base_url()."contact/std_internbook/$row->std_id"?>'><button class='btn btn-info'>ดูรายละเอียด</button></a>


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
    $('.selectSTD').select2({
    placeholder: '--- ค้นหานักเรียน---',
    });
</script>
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