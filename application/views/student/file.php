
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-midnightblue">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-condensed" style="width:50%">
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
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-condensed" style="width:50%">
											<h3>แบบประเมิน</h3>
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