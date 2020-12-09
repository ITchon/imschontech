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
											<h3><strong>John Doe</strong></h3>
											<!-- <thead>
												<tr>
													<th width="50%"></th>
													<th width="50%"></th>
												</tr>
											</thead> -->
											<tbody>
												<tr>
													<td>Web</td>
													<td><a href="#">www.johndoe.com</a></td>
												</tr>
												<tr>
													<td>Email</td>
													<td><a href="">doe@lime.com</a></td>
												</tr>
												<tr>
													<td>Phone</td>
													<td>(123)-342-5412</td>
												</tr>
												<tr>
													<td>Position</td>
													<td>Designer</td>
												</tr>
												<tr>
													<td>Status</td>
													<td>Member</td>
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
								<div class="col-md-6">
									<h3>Position of : <b>TBKK<b></h3>
				
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
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                                                    <thead class="bg-primary">
	              	                    				<tr>
	              	                    					<th width="5%">#</th>
	              	                    					<th width="35%">Title</th>
	              	                    					<th width="35%">Start</th>
	              	                    					<th width="25%">End</th>
	              	                    					<th width="25%"> - </th>
	              	                    				</tr>
	              	                    			</thead>
	              	                    			<tbody>
					                    			  <?php foreach($result as $r){ ?>
	              	                    				<tr>
					                    				  <td><?php echo $r->id ?></td>
					                    				  <td><?php echo $r->title ?></td>
					                    				  <td><?php echo $r->start_event ?></td>
					                    				  <td><?php echo $r->end_event ?></td>
					                    				  <td><a href="#" class=""><i class="fa fa-eye"></i></a></td>
					                    				</tr>
					                    				  <?php  } ?> 
                                                    
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