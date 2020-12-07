<?php include "header.php" ?>

<div id="page-content">
	<div id='wrap'>
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Form Components</li>
				<li class="active">Image Cropping</li>
			</ol>

			<h1>Image Cropping</h1>
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
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>jCrop</h4>
							<div class="options">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#crop-default-tab" data-toggle="tab">Default</a></li>
									<li><a href="#crop-handler-tab" data-toggle="tab">Event Handler</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<p>Jcrop is the quick and easy way to add image cropping functionality to your web application. It combines the ease-of-use of a typical jQuery plugin with a powerful cross-platform DHTML cropping engine that is faithful to familiar desktop graphics applications.</p>
							<div class="tab-content">
								<div class="tab-pane active" id="crop-default-tab">
									<h3>Default behavior of Jcrop.</h3>
									<p>This is the most basic example of Jcrop implementation. Since no event handlers are attached, it's not very exciting, but displays the out of box functionality.</p>
									<img src="assets/demo/images/arch_fountain.jpg" alt="Fountain" class="img-responsive" id="crop-default">
								</div>
								<div class="tab-pane" id="crop-handler-tab">
									<h3>Event Handler</h3>
									<p>This example ties several form values together with a simple event handler. The form values are updated as the selection is changed, thanks to Jcrop's onChange event handler.</p>
									<img src="assets/demo/images/ind_corrosion_hazard.jpg" alt="Corrosion Hazard" class="img-responsive" id="crop-handler">
									<hr>
									<form class="form-horizontal row-border" role="form">
										<h3>Cropped Image Details</h3>
										<div class="form-group">
											<label for="X1" class="col-sm-3 control-label">X1</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="X1" id="x1">
											</div>
											
											<label for="Y1" class="col-sm-3 control-label">Y1</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="Y1" id="y1">
											</div>
										</div>
										
										<div class="form-group">
											<label for="X2" class="col-sm-3 control-label">X2</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="X2" id="x2">
											</div>
									
											<label for="Y2" class="col-sm-3 control-label">Y2</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="Y2" id="y2">
											</div>
										</div>

										<div class="form-group">
											<label for="W" class="col-sm-3 control-label">W</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="W" id="w">
											</div>
									
											<label for="H" class="col-sm-3 control-label">H</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="H" id="h">
											</div>
										</div>
									</form>	
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