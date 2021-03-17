<style>
    .student_detail{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .fa-check{
        color: green;
    }
    .fa-ban{
        color: red;
    }
	#form {
  display: inline-block;
	}
</style>
<head><?php echo $map['js']; ?></head>

			<div class="row">
				<div class="col-md-12">
               
					<div class="panel panel-midnightblue">
						<div class="panel-body">

							<div class="row">
								<div class="col-md-6">
									<img src="assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
									<div class="table-responsive">
										<table class="table table-condensed ">
											<label class="control-label col-sm-6 col-xs-6" for="train">
												<h3><strong><?php echo ucfirst($train_detail[0]->fname."  ".$train_detail[0]->lname) ?></strong></h3>
											</label>
    										

											
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>

												<tr>
													<td><b>Class</b></td>
													<td><?php echo $train_detail[0]->class_name." ". $train_detail[0]->class_group  ?></td>
												</tr>
												<tr>
													<td><b>Division</b></td>
													<td><?php echo $train_detail[0]->dv_name ?></td>
												</tr>
												<tr>
													<td><b>Train Duration</b></td>
													<td><?php echo $train_detail[0]->start_date." ถึง ".$train_detail[0]->end_date ?></td>
												</tr>
												<tr>
														<td><b>Train Location</b></td>
														<td><?php echo $train_detail[0]->company_name." <br>".$train_detail[0]->address." ". $train_detail[0]->province ." ". $train_detail[0]->zipcode." <br>(".$train_detail[0]->tel.") " ?></td>
															
												</tr>
												
												<tr>
													<td><b>Contact Person</b></td>
													<td><?php echo $train_detail[0]->name." (".$train_detail[0]->tel.") " ?></td>
												</tr>
											</tbody>
										</table>

									</div>
								</div>
								<div class="col-md-6">
									<h3>Position of : <b><?php echo $train_detail[0]->company_name ?><b></h3>
				
           							        <?php echo $map['html']; ?>
    
								</div>
							</div>
							<hr><div class="row">
								<div class="col-md-12">
									<div class="tab-container tab-success">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#home1" data-toggle="tab">รายการปฎิบัติงาน</a></li>
											<li class=""><a href="#profile1" data-toggle="tab">เวลาการปฎิบัติงาน</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active clearfix" id="home1">
												<div class="col-md-12">
												<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                                                    <thead class="bg-primary">
	              	                    				<tr>
														  	<th width="20%">Date</th>
	              	                    					<th width="30%">Title</th>
	              	                    					<th width="3%"> - </th>
	              	                    				</tr>
	              	                    			</thead>
	              	                    			<tbody>
													  <?php 

											foreach($result_test as $row){
												
												$s = $row->date;
												$dt = new DateTime($s);
												$date = $dt->format('Y-m-d');
												$time = $dt->format('H:i:s');
												?>
												<tr>
												<td><?php echo $date ?></td>
												<td>
												<?php foreach($result as $r){
														$s = $r->start_event;
														$dt = new DateTime($s);
														$date_event = $dt->format('Y-m-d');
														$time = $dt->format('H:i:s');
														if($date == $date_event){
															echo $r->title."  ";
														}
												} ?>
												</td>
												<input id="std_id" type="hidden" name="std_id" value="<?php echo $r->std_id?>">
												<td>
												
												<button type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
												</button>
												</td>
												</tr>
												<?php
													}
														  ?> 
                                                    
	              	                    			</tbody>
                                                </table>
												</div>

												
											</div>
											
	              							<div class="tab-pane" id="profile1">
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
			

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var t_id = $('#t_id').val();
		$.ajax({
			url: "<?php
				$std_id = $this->session->userdata('std_id');
					 echo base_url("crud/C_std_work_time/$std_id");
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
	var std_id = document.getElementById("std_id").value;
	 $.ajax({
				url: "<?php
					 echo base_url("crud/event_forcontact/");
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