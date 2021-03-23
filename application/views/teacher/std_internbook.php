<div id="page-content">
<div id='wrap' >
        <div class="container" style="min-height: 752px;background-color:#ffffff" >
        <div id="page-heading">
		<?php
		$name = $train_detail[0]->title.$train_detail[0]->fname." ".$train_detail[0]->lname ?>
         <h2><?php echo $name; ?></h2>
            </div>

								<div class="row">
								<div class="col-md-12">
									<div class="tab-container tab-midnightblue">
										<ul class="nav nav-tabs">
											<li class="active" style="font-size:18px"><a href="#home1" data-toggle="tab">Timeline</a></li>
											<li class="active"  style="float:right;font-size:18px">	
												<a id="overall-teacher"></a>
											</li>
										</ul>
                                        <div class="panel panel-sky">
                                            <div class="panel-body collapse in">

					<div class="table-responsive">
					<!-- <div class="pull-right text-right">
							
							<a href="<?php echo base_url()?>Student/export_excel" class="btn btn-success btn-lg" data-toggle="tooltip" title="ส่งออกข้อมูล">
								<i class="fas fa-file-excel"></i></span> Excel
							</a>
						</div> -->
					<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
						<thead class="bg-primary">
							  <tr>
								  <th>Date</th>
								  <th width="40%">Title</th>
								  <th width="3%"> - </th>
							  </tr>
						  </thead>
						  <tbody>
			<?php 
					$sum = 0;
					$std_chk =0;
					$contact_chk =0;
				foreach($result_test as $row){
					$dt = new DateTime($row->date);
					$date = $dt->format('Y-m-d');
					$time = $dt->format('H:i:s');
					$std_chk++;
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
						<input type="hidden" id="teacher" value="<?php echo $std_chk ?>">
						<input type="hidden" id="sum" value="<?php echo $sum ?>">
						<input id="std_id" type="hidden" name="std_id" value="<?php echo $train_detail[0]->std_id ?>">
						  <!---------------------------- -->

					</table>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 	var teacher_chk = $('#teacher').val();

 	var sum = $('#sum').val();
	 $('#overall-teacher').html("Total : "+teacher_chk);
	//  $('#overall-contact').html("Company : "+company_chk+"/"+sum);
});
$(".open-modal").click(function() {
	var date = $(this).val();
	var std_id = document.getElementById("std_id").value;
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


