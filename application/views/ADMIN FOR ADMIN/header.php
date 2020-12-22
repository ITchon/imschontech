<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Internship Management</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">

    <!-- <link href="<?php echo base_url(); ?>assets/less/styles.less" rel="stylesheet/less" media="all">  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css?=140">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <link href='<?php echo base_url(); ?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ie8.css">
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/charts-flot/excanvas.min.js"></script>
	<![endif]-->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-markdown/css/bootstrap-markdown.min.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/plugins/form-toggle/toggles.css' /> 

<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/less.js"></script> -->
</head>

<body class="">

    <!-- <div id="headerbar"  >
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messages
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-midnightblue">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-orange">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Plugins
                        </div>
                    </a>
                </div>
                            
            </div>
        </div>
    </div> -->

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner" >
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
        <!-- <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a> -->
        <div class="navbar-header pull-right">
            <!-- <a href="#" ><span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i></span> -->
        </div>
            <!-- <a  href="<?php echo base_url(); ?>main"></a> -->
        



            <!--###################################### -->
        <ul class="nav navbar-nav pull-right toolbar"> 
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> <i class="fa fa-caret-down"></i></span>
                    <img src="<?php echo base_url(); ?>assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
        		<ul class="dropdown-menu userinfo arrow">
        			<li class="username">
                        <a href="#">
        				    <div class="pull-left"><img src="<?php echo base_url(); ?>assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
        				    <div class="pull-right"><h5>Hi, <?php echo $this->session->userdata('username'); ?>!</h5><small>Logged in as <span>john275</span></small></div>
                        </a>
        			</li>
        			<li class="userlinks">
        				<ul class="dropdown-menu">
        					<li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
        					<li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
        					<li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
        					<li class="divider"></li>
        					<li><a  href="<?php echo base_url()?>/logout" class="text-right">Sign Out</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        
		</ul>
    </header>




















    