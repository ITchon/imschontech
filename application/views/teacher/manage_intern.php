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
                          echo "บันทึกการปฏิบัติงานของนักศึกษา";
                     }else{
                     echo "No Data";
                 } ?>
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
                                            <th width="10%">อนุมัติการปฏิบัติงาน</th>
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
												<button data-id='<?php echo $row->std_id?>' type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
												</button>
                                                <!-- <?php echo "<a type='button' href='".base_url()."manage_teacher/delete_teacher_p/".$r->std_id."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-success btn-sm fa fa-check'></i></a>";?> -->
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
