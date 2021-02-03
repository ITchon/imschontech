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

 
}
#sheder{
	-webkit-box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
-moz-box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
box-shadow: 1px -3px 26px 10px rgba(133,133,133,1);
}
</style>
<body class="focusedform" id="grad1" >

<div class="verticalcenter">
	<div class="panel panel-dark " id="sheder">
		<div class="panel-body">
		<img src="assets/img/logochpng.png" alt="Logo" class="brand" />


			
			<h4 class="text-center" style="margin-bottom: 25px;"> ล็อคอินเพื่อเข้าสู่ระบบ </h4>
            <form action="<?php echo base_url() ?>Login/chklogin" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Username (รหัสนักเรืยน,นักศึกษา,อาจารย์)" name="username">
								</div>
							</div>
				
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Password (เบอร์โทรศัพท์)" name ="password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
							
							<div class="box-text-login">
								<table class="table text-navyno-border">
							<tbody><tr><td>
							<table width="100%" align="center">
								<tbody><tr valign="top"><td colspan="2"><hr size="1"></td>
									</tr><tr valign="top"><td colspan="2"><b><big>การเข้าใช้งานระบบ</big></b></td>
									</tr><tr valign="top"><td><b>นักเรียน - นักศึกษา</b></td><td>เข้าสู่ระบบโดยใช้ รหัสประจำตัวนักเรียน<br>รหัสผ่านคือ เบอร์โทรศัพท์</td>
									</tr><tr valign="top">
									</tr>
								</tbody>
							</table>
							</td>
							</tr></tbody></table>
							</div>  
									
								                                             
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
                <button type="submit" class="btn btn-danger">ยืนยัน</button>
			</div>
		</div>
	</div>
 </div>
 </form>

</body>
</html>



