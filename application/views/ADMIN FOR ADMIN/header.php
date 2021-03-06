<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Internship Management</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">
    <link rel="icon" href="<?php echo base_url('assets/img/icon-ims.png') ?>" type="image/icon type">
    <!-- <link href="<?php echo base_url(); ?>assets/less/styles.less" rel="stylesheet/less" media="all">  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css?=140">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap-select.css">

    <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-markdown/css/bootstrap-markdown.min.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-toggle/toggles.css' /> 

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/less.js"></script> -->
</head>
<style>
.navbar-inverse{background-color:#434343}
.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#434343}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.open>a:hover{background-color:#434343}header .toolbar .dropdown,header #headerbardropdown,header #rightmenu-trigger{border-left:1px solid #434343}header #leftmenu-trigger{border-right:1px solid #434343}@media (max-width:480px){ul.toolbar{background-color:#434343}}

</style>
<script>
</script>
<body class="">

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner" >
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>

        <div class="navbar-header pull-left toolbar">
		
			<!-- <a class="nav navbar-nav pull-left toolbar">  -->
        	<!-- <a class="hidden-xs" > <?php echo $this->session->userdata('username'); ?></a> -->
        		<!-- <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i></span> -->

			<!-- -->
        </div>
            <a  href="<?php echo base_url(); ?>main"></a>
        
		


            <!--###################################### -->
        <ul class="nav navbar-nav pull-right toolbar"> 
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i></span>
        		
        				<ul class="dropdown-menu">
                        <li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
        					<li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
        					<li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
        					<li class="divider"></li>
        					<li><a  href="<?php echo base_url()?>/logout" class="text-right">Sign Out</a></li>
        				</ul>
        		
        	</li>
		</ul>
    </header>




















    