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
#grad1 {

  background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(213, 117, 72, 1) 100%);
}
</style>
<body class="focusedform" id="grad1" >

<div class="verticalcenter">
<!-- <div class="col-sm-6"> -->
		<img src="assets/img/logochpng.png" alt="Logo" class="brand" />
	<!-- </div> -->
<!-- <div class="col-sm-6">
		<a href=""><img src="assets/img/icon-ims.png" alt="Logo" class="brand" /></a>
</div> -->
	<div class="panel panel-primary">
		<div class="panel-body">
			
			<h4 class="text-center" style="margin-bottom: 25px;"> ล็อคอินเพื่อเข้าสู่ระบบ </h4>
            <form action="<?php echo base_url() ?>Login/chklogin" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Username (รหัสนักเรืยน,นักศึกษา,อาจารย์)" name="username">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Password (เบอร์โทรศัพท์)" name ="password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
							<br>
								<p style="font-size:6px">- Username ให้ใส่รหัสนักเรียน , นักศึกษา </p>    
								<p style="font-size:6px">- password เบอร์โทรศัพท์ </p>    
									
								                                             
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<br>
								<?php echo $this->session->flashdata("success"); ?> 
								 
							</div>
						</div>
		</div>
		
		<div class="panel-footer">
			<!-- <a href="extras-forgotpassword.htm" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a> -->
			
			<div class="pull-right">
                <!-- <a href="#" class="btn btn-default">Reset</a> -->
                <button type="submit" class="btn btn-success">ยืนยัน</button>
			</div>
		</div>
	</div>
 </div>
 </form>

</body>
</html>