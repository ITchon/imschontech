<head><?php echo $map['js'];?></head>

			<div class="row">
				<div class="col-md-12">
               
					<div class="panel panel-midnightblue">
						<div class="panel-body">

							<div class="row">
								<div class="col-md-6">
									<img src="assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
									<div class="table-responsive">
										<table class="table table-condensed ">
										<form action="" method="post" >
											<label class="control-label col-sm-6 col-xs-6" for="train">
												<h3><strong><?php echo ucfirst($train_detail[0]->fname."  ".$train_detail[0]->lname) ?></strong></h3>
											</label>
    										<div class="col-sm-3 col-xs-3">
											<?php
												$optName = array();
												foreach($train_select as $r){
												    $optName[$r->t_id] = $r->start_date;   
												}
												$selected = $train_id ;
												echo form_dropdown('train_id', $optName ,$selected,'class="form-control" ');
											 ?>
									
    										</div>
											<input type="submit" class="btn btn-primary" value="Submit">
											</form>
											
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
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div class="tab-container tab-midnightblue">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#home1" data-toggle="tab">Timeline</a></li>
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
	              	                    					<th width="10%">Teacher</th>
	              	                    					<th width="10%">Company</th>
	              	                    					<th width="3%"> - </th>
	              	                    				</tr>
	              	                    			</thead>
	              	                    			<tbody>
													  <?php 

											foreach($result_test as $row){
												
												$s = $row->date;
												$dt = new DateTime($s);
												$date = $dt->format('m/d/Y');
												$time = $dt->format('H:i:s');
												?>
												<tr>
												<td><?php echo $date ?></td>
												<td>
												<?php foreach($result as $r){
														$s = $r->start_event;
														$dt = new DateTime($s);
														$date_event = $dt->format('m/d/Y');
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
														$s = $r->start_event;
														$dt = new DateTime($s);
														$date_event = $dt->format('m/d/Y');
														$time = $dt->format('H:i:s');
														if($date == $date_event){
															array_push($a,$r->teacher_confirm);
														}
												}
												
												if (in_array("1", $a))
												  {
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
														$s = $r->start_event;
														$dt = new DateTime($s);
														$date_event = $dt->format('m/d/Y');
														$time = $dt->format('H:i:s');
														if($date == $date_event){
															array_push($a,$r->contact_confirm);
														}
												} 
												if (in_array("1", $a))
												  {
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
												<a class="open-modal" ><i class="fa fa-eye"></i></a>
												</td>
												</tr>
												<?php
													}
														  ?> 
                                                    
	              	                    			</tbody>
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
</body>
</html>
<script>
$(document).on('click', '.open-modal', function() {
	 var id = $(this).val();
	 $.ajax({
				url: "<?php
				$zone = $this->uri->segment('1');
					 echo base_url("crud/$zone");
					 ?>",  
    			type: "POST",
    			cache: false,
    			data:{
    				id: id
    			},
    			success: function(data){		
     			//  $('#smart_fac').modal();
     			//  $('#data_body').html(data);
     			//  $('#text_header').html($("#Textheader").val());//modal head

				  
	 			//  console.log(data);
    			},
          error:function(data){
            // console.log(data);
          }
    });
});
 </script>