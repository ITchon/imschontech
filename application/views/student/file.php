
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-midnightblue">
						<div class="panel-body">
							<div class="row">
							<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-condensed" style="width:100%">
											<h3>การประเมิน</h3>
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>
                            				  <?php if(array_search($train_id, array_column($result_spv_ct, 't_id')) !== false){
												  	foreach($result_spv_ct as $rsc){
														  if($train_id == $rsc['t_id']){
														$subject_id = $rsc['subject_id'] ;
														$spv_id = $rsc['spv_contact_id'] ;
														?>
												<tr> 
													<td><?php echo $rsc['subject_name'] ?> </td>
													<td><a class="info-tiles tiles-toyo" href="<?php echo base_url()."pdf/view/$spv_id" ?>"> <button class="btn btn-brown">Download</button></a></td>
												</tr>
						
													<?php }
												} 
											}else{ ?>
												<tr> 
													<td class="">สถานประกอบการ : </td>
													<td class="text-danger">ยังไม่ได้ประเมิน</td>
												</tr>
												<?php } ?>
                            				  <?php if(array_search($train_id, array_column($result_spv_th, 't_id')) !== false){
														  	foreach($result_spv_th as $rst){
															if($train_id == $rst['t_id']){
															  $subject_id = $rst['subject_id'] ;
															  $spv_id = $rst['spv_teacher_id'] 
															?>
													  <tr> 
														  <td><?php echo $rst['subject_name'] ?> </td>
														  <td><a class="info-tiles tiles-toyo" href="<?php echo base_url()."pdf/view_teacher/$spv_id" ?>"> <button class="btn btn-brown">Download</button></a></td>
													  </tr>
							  
														  <?php }
													  } 
												 }else{ ?>
												<tr> 
													<td class="">อาจารย์นิเทศ : </td>
													<td class="text-danger">ยังไม่ได้ประเมิน</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-condensed" style="width:100%">
										
											<h3>เอกสารการปฏิบัติงาน</h3>
											<tbody>
												<tr> 
													<td>บันทึกการฝึกปฏิบัติงาน</td>
													<td>
														<a href="<?php 
                                                                    $t_id = $this->uri->segment('3'); 
                                                                    echo base_url()."pdf/std_worklist_form/$t_id" ?>">
																	 <button class="btn btn-brown">Download</button>
                                                        </a>
													</td>
												</tr>
												<tr> 
													<td>ตารางเวลาการปฏิบัติงาน</td>
													<td>
														<a href="<?php 
                                                                    $t_id = $this->uri->segment('3'); 
                                                                    echo base_url()."pdf/std_work_form/$t_id" ?>">
																	 <button class="btn btn-brown">Download</button>
                                                        </a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-condensed" style="width:100%">
											<h3>แบบฟอร์มการประเมิน</h3>
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>
												<?php foreach($result_subject as $rs){ ?>
												<tr> 
													<td><?php echo $rs->subject_name ?> </td>
													<td><a class="info-tiles tiles-toyo" href="<?php echo base_url()."pdf/traing_form/$rs->subject_id" ?>"> <button class="btn btn-brown">Download</button></a></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								
							
							</div>