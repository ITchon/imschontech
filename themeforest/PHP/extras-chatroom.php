<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Extras</li>
				<li class="active">Chat Room</li>
			</ol>

			<h1>Chat Room</h1>
			<div class="options">
                    <div class="btn-toolbar">
                        <div class="btn-group hidden-xs">
                            <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text File (*.txt)</a></li>
                                <li><a href="#">Excel File (*.xlsx)</a></li>
                                <li><a href="#">PDF File (*.pdf)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                </div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4>Chat Room</h4>
                            <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-refresh"></i></a>
                            </div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-8">
									<div class="panel-chat well" id="chat">
										<div class="chat-message me">
											<div class="chat-contact">
												<img src="assets/demo/avatar/avatar00_0002_scottwills_cat.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
											</div>
										</div>
										<div class="chat-message chat-primary">
											<div class="chat-contact">
												<img src="assets/demo/avatar/potter.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
											</div>
										</div>
										<div class="chat-message chat-indigo">
											<div class="chat-contact">
												<img src="assets/demo/avatar/tennant.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
											</div>
										</div>
										<div class="chat-message chat-midnightblue">
											<div class="chat-contact">
												<img src="assets/demo/avatar/johansson.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
											</div>
										</div>
										<div class="chat-message me">
											<div class="chat-contact">
												<img src="assets/demo/avatar/avatar00_0002_scottwills_cat.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
											</div>
										</div>
										<div class="chat-message me">
											<div class="chat-contact">
												<img src="assets/demo/avatar/avatar00_0002_scottwills_cat.png" alt="">
											</div>
											<div class="chat-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</div>
										</div>
                                        <div class="chat-message chat-midnightblue">
                                            <div class="chat-contact">
                                                <img src="assets/demo/avatar/johansson.png" alt="">
                                            </div>
                                            <div class="chat-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
                                            </div>
                                        </div>
                                        <div class="chat-message chat-success">
                                            <div class="chat-contact">
                                                <img src="assets/demo/avatar/jobs.png" alt="">
                                            </div>
                                            <div class="chat-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
                                            </div>
                                        </div>
                                        <div class="chat-message me">
                                            <div class="chat-contact">
                                                <img src="assets/demo/avatar/avatar00_0002_scottwills_cat.png" alt="">
                                            </div>
                                            <div class="chat-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, esse, nobis aut odit dignissimos alias.
                                            </div>
                                        </div>
									</div>
									<form action="#">
		                        	    <div class="input-group">
		                        	    	<input type="text" placeholder="Enter your message here" class="form-control">
		                        	    	<span class="input-group-btn">
		                        	    		<button type="button" class="btn btn-primary"><i class="fa fa-comments-o"></i></button>
		                        	    	</span>
		                        	    </div>
		                        	</form>
								</div>
								<div class="col-md-4">
									<div class="panel">
										<div class="panel-body">
											<ul class="chat-users">
										        <h4>Online<small> (5)</small></h4>
													<li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
	                        						<li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
	                        						<li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
	                        						<li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
	                        						<li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
	                                            <hr>
	                                            <h4>All Contacts<small> (10)</small></h4>
	                        						<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
	                            					<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>				
	                            					<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
	                            					<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li>
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>             
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li>
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
	                                            	<li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>



			



		</div> <!-- container -->
	</div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>