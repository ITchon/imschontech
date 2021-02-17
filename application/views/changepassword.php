<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Internship Management</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
	<link rel="icon" href="<?php echo base_url('assets/img/icon-ims.png') ?>" type="image/icon type">
    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    
    <!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>

<style>
#sheder{
	-webkit-box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
-moz-box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
}
</style>
<body class="focusedform">

<div class="verticalcenter">
	<div class="panel panel-dark" id="sheder">
		<div class="panel-body">
			<h4 class="text-center text-danger" style="margin-bottom: 25px;">กรุณาเปลี่ยนรหัสผ่านใหม่</h4>
				<form action="<?php echo base_url() ?>Login/save_new_pass" class="form-horizontal" style="margin-bottom: 0px !important;" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" minlength="8" name="password1" id="password1" placeholder="New password" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" minlength="8" name="password2" id="password2" placeholder="Comfirm password" required>
								</div>
							</div>
						</div>
				
					<?php echo $this->session->flashdata("failed"); ?> 
		</div>
		<div class="panel-footer">
			<div class="pull-right">
				<button type="submit" class="btn btn-success">ยืนยัน <i class="fa fa-arrow-right"></i></button>
			</div>
		</div>
	</div>
 </div>
 </form>
</body>
</html>