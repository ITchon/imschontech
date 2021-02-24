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
									<input type="text"  class="form-control" placeholder="Username " name="username" placeholder="  ">
								</div>
							</div>
				
							<!-- <div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" value="" id="myInput" class="form-control">
                                    <span class="input-group-addon"><input type="checkbox" onclick="myFunction()"></span> 
								</div>
							</div> -->

							<!-- <input type="password" id="password-field" > -->
        					

							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" value="" id="password-field" class="form-control">
                                    <span class="input-group-addon"><i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i></span> 
								</div>
							</div>

						</div>
						<div class="form-group">
							<div class="col-sm-12">
							
							<div class="box-text-login">
								<table class="table text-navyno-border">
								
							<tbody><tr><td>
							<div class="" >
							 
								 
							<table width="100%" align="center" class="">
								<tbody>
									<tr valign="top">
									<?php echo $this->session->flashdata("success"); ?>
									<hr>
									</tr>
									<tr valign="top">
										<td colspan="2"><b><big>การเข้าใช้งานระบบ</big></b></td>
									</tr>
									<tr valign="top">
										<td><b>นักเรียน</b></td>
										<td style="border-color: grey;">เข้าสู่ระบบโดยใช้ รหัสประจำตัวนักเรียน<br>รหัสผ่านคือ เบอร์โทรศัพท์</td>
									</tr>
									<tr valign="top">
										<td><b>อาจารย์</b></td>
										<td>เข้าสู่ระบบโดยใช้ รหัสประชาชน <br>รหัสผ่านคือ วันเกิดเช่น DD-MM-YYYY</td>
									</tr>
								</tbody>
							</table>
							</div>
							</td>
							</tr></tbody></table>
							</div>  
									
								                                             
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<br>
							
							</div>
						</div>
		</div>
		
		<div class="panel-footer">
			<!-- <a href="extras-forgotpassword.htm" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a> -->
			
			<div class="pull-right">
               
                <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
			</div>
			</form>
			<div class="pull-left">
				<!-- <input type="submit" class="btn btn-danger" > -->
                <a href="<?php echo base_url() ?>website" class="text-light"><button type="submit" href="" class="btn btn-danger">กลับสู่หน้าหลัก</button></a>
			</div>
		</div>
	</div>
 </div>
 

</body>
</html>

<script>
 

function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}
</script>



