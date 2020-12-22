
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-midnightblue">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<img src="assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
									<div class="table-responsive">
										<table class="table table-condensed">
											<h3>ข้อมูลส่วนตัว</h3>
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>
												<tr>
													<td>ชื่อ</td>
													<td><?php echo $result->title." ".$result->fname." ".$result->lname ?></td>
												</tr>
												<tr>
													<td>แผนก</td>
													<td><?php echo $result->dv_name ?></td>
												</tr>
												<tr>
													<td>เพศ</td>
                                                    <?php if ($result->title == "นาย"){
                                                        $gender = "ชาย";
                                                    }else{
                                                        $gender = "หญิง";
                                                    }?>
													<td><?php echo $gender ?></td>
												</tr>
												<tr>
													<td>เบอร์โทร์</td>
													<td><?php echo $result->tel ?></td>
												</tr>
												<tr>
													<td>อีเมลล์</td>
													<td><?php echo $result->email ?></td>
												</tr>
												<tr>
													<td>วันเกิด   </td>
													<td><?php echo $result->th_birth_date ?></td>
												</tr>
												<tr>
													<td>Social</td>
													<td>
														<a href="#" class="btn btn-xs"><i class="fa fa-skype"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-facebook"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-twitter"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-dribbble"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-tumblr"></i></a>
														<a href="#" class="btn btn-xs"><i class="fa fa-linkedin"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							
							</div>