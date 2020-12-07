
<div id="page-content">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url()?>main">Dashboard</a></li>
				<li>UI Elements</li>
				<li class="active">Forms</li>
			</ol>

			<h1>Forms</h1>
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
			<div class="alert alert-info">
				Use the <strong>same</strong> code as you would in <a class="alert-link" href="http://getbootstrap.com/">Twitter's Bootstrap 3.0</a>!
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
			<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Form Layout</h4>
				          
				      </div>
				      <div class="panel-body">
				      	<h3>Basic Form Elements</h3>
						<p>Try resizing the window to see how the form adapts at smaller screen sizes!</p>
						<br>
						<form class="form-horizontal">
						  <div class="form-group">
						    <label for="focusedinput" class="col-sm-3 control-label">Focused Input</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="focusedinput" placeholder="Default Input">
						    </div>
						    <div class="col-sm-3">
						    	<p class="help-block">Your help text!</p>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="disabledinput" class="col-sm-3 control-label">Disabled Input</label>
						    <div class="col-sm-6">
						      <input disabled type="text" class="form-control" id="disabledinput" placeholder="Disabled Input">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword" class="col-sm-3 control-label">Password</label>
						    <div class="col-sm-6">
						      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
						    </div>
						  </div>
						  <div class="form-group">
						  	<label for="checkbox" class="col-sm-3 control-label">Checkbox</label>
						  	<div class="col-sm-6">
						  		<div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
						  		<div class="checkbox block"><label><input type="checkbox" checked> Checked</label></div>
						  		<div class="checkbox block"><label><input type="checkbox" disabled> Disabled Unchecked</label></div>
						  		<div class="checkbox block"><label><input type="checkbox" disabled checked> Disabled Checked</label></div>
						  	</div>
						  </div>
						  <div class="form-group">
						  	<label for="selector1" class="col-sm-3 control-label">Multiple Select</label>
						  	<div class="col-sm-6"><select name="selector1" id="selector1" class="form-control">
						  		<option>Lorem ipsum dolor sit amet.</option>
						  		<option>Dolore, ab unde modi est!</option>
						  		<option>Illum, fuga minus sit eaque.</option>
						  		<option>Consequatur ducimus maiores voluptatum minima.</option>
						  	</select></div>
						  </div>
						  <div class="form-group">
						  	<label for="txtarea1" class="col-sm-3 control-label">Textarea</label>
						  	<div class="col-sm-6"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
						  </div>
						  <div class="form-group">
						  	<label for="radio" class="col-sm-3 control-label">Radio</label>
						  	<div class="col-sm-6">
						  		<div class="radio block"><label><input type="radio"> Unchecked</label></div>
						  		<div class="radio block"><label><input type="radio" checked> Checked</label></div>
						  		<div class="radio block"><label><input type="radio" disabled> Disabled Unchecked</label></div>
						  		<div class="radio block"><label><input type="radio" disabled checked> Disabled Checked</label></div>
						  	</div>
						  </div>
				
						  <div class="form-group">
						    <label for="smallinput" class="col-sm-3 control-label">Small Input</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="mediuminput" class="col-sm-3 control-label">Medium Input</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="largeinput" class="col-sm-3 control-label">Large Input</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
						    </div>
						  </div>
				
						</form>
				      </div>
				      <div class="panel-footer">
				      	<div class="row">
				      		<div class="col-sm-6 col-sm-offset-3">
				      			<div class="btn-toolbar">
					      			<button class="btn-primary btn">Submit</button>
					      			<button class="btn-default btn">Cancel</button>
				      			</div>
				      		</div>
				      	</div>
				      </div>
				  </div>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12">
				    <div class="panel panel-primary">
				        <div class="panel-heading">
				            <h4>Grids</h4>
				        </div>
				        <div class="panel-body">
				        	<p>Using <a href="scaffolding-grids.php">Grids</a>, any input box can be placed anywhere and be of any size!</p>
							<form>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-12">
									    <input type="text" class="form-control" placeholder=".col-xs-12">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-10">
									    <input type="text" class="form-control" placeholder=".col-xs-10">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									  <div class="col-xs-9">
									    <input type="text" class="form-control" placeholder=".col-xs-9">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-4">
									    <input type="text" class="form-control" placeholder=".col-xs-4">
									  </div>
									  <div class="col-xs-8">
									    <input type="text" class="form-control" placeholder=".col-xs-8">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-5">
									    <input type="text" class="form-control" placeholder=".col-xs-5">
									  </div>
									  <div class="col-xs-7">
									    <input type="text" class="form-control" placeholder=".col-xs-7">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-6">
									    <input type="text" class="form-control" placeholder=".col-xs-6">
									  </div>
									  <div class="col-xs-6">
									    <input type="text" class="form-control" placeholder=".col-xs-6">
									  </div>
									</div>
							    </div>
								<div class="form-group">
									<div class="row">
									  <div class="col-xs-4">
									    <input type="text" class="form-control" placeholder=".col-xs-4">
									  </div>
									  <div class="col-xs-4">
									    <input type="text" class="form-control" placeholder=".col-xs-4">
									  </div>
									  <div class="col-xs-4">
									    <input type="text" class="form-control" placeholder=".col-xs-4">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									  <div class="col-xs-6">
									    <input type="text" class="form-control" placeholder=".col-xs-6">
									  </div>
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-8">
									    <input type="text" class="form-control" placeholder=".col-xs-8">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									  <div class="col-xs-3">
									    <input type="text" class="form-control" placeholder=".col-xs-3">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-5">
									    <input type="text" class="form-control" placeholder=".col-xs-5">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-5">
									    <input type="text" class="form-control" placeholder=".col-xs-5">
									  </div>
									</div>
							    </div>
							    <div class="form-group">
									<div class="row">
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									  <div class="col-xs-2">
									    <input type="text" class="form-control" placeholder=".col-xs-2">
									  </div>
									</div>
							    </div>

							</form>
				        </div>
				    </div>
				</div>
			</div>


		 </div> <!-- row -->
	 </div> <!-- container -->
 </div> <!-- wrap -->
</div> <!-- page-content -->
