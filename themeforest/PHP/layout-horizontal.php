<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Avant</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">

    <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> 
    <!-- <link rel="stylesheet" href="assets/css/styles.min.css?=120"> -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <?php if (isset($_COOKIE["theme"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["theme"] ."' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>";
    } else { ?> 
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <?php } ?>

    <?php if (isset($_COOKIE["headerstyle"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["headerstyle"] ."' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>";
    } else { ?>
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    <?php } ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
	<![endif]-->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<?php
function linktag($address) {echo "<link rel='stylesheet' type='text/css' href='$address' /> \n";}
    linktag('assets/plugins/form-toggle/toggles.css'); //<!-- Toggles -->
?>

<script type="text/javascript" src="assets/js/less.js"></script>
</head>

<body class="horizontal-nav <?php 
    if (isset($_COOKIE["fixed-header"])) echo ' static-header'; 
?>">

    <div id="headerbar">
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
    </div>


    <header class="navbar navbar-inverse <?php if (isset($_COOKIE["fixed-header"])) {echo 'navbar-static-top';} else {echo 'navbar-fixed-top';} ?>" role="banner">
        <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">John McCartney <i class="fa fa-caret-down"></i></span><img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
                            <div class="pull-right"><h5>Howdy, John!</h5><small>Logged in as <span>john275</span></small></div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
                            <li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
                            <li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="text-right">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-envelope"></i><span class="badge">1</span></a>
                <ul class="dropdown-menu messages arrow">
                    <li class="dd-header">
                        <span>You have 1 new message(s)</span>
                        <span><a href="#">Mark all Read</a></span>
                    </li>
                    <div class="scrollthis">
                        <li><a href="#" class="active">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">9 hrs</span>
                            <img src="assets/demo/avatar/corbett.png" alt="avatar" />
                            <div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">2 days</span>
                            <img src="assets/demo/avatar/tennant.png" alt="avatar" />
                            <div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Messages</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-bell"></i><span class="badge">3</span></a>
                <ul class="dropdown-menu notifications arrow">
                    <li class="dd-header">
                        <span>You have 3 new notification(s)</span>
                        <span><a href="#">Mark all Seen</a></span>
                    </li>
                    <div class="scrollthis">
                        <li>
                            <a href="#" class="notification-user active">
                                <span class="time">4 mins</span>
                                <i class="fa fa-user"></i>
                                <span class="msg">New user Registered. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-danger active">
                                <span class="time">20 mins</span>
                                <i class="fa fa-bolt"></i>
                                <span class="msg">CPU at 92% on server#3! </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success active">
                                <span class="time">1 hr</span>
                                <i class="fa fa-check"></i> 
                                <span class="msg">Server#1 is live. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-warning">
                                <span class="time">2 hrs</span>
                                <i class="fa fa-exclamation-triangle"></i> 
                                <span class="msg">Database overloaded. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-order">
                                <span class="time">10 hrs</span>
                                <i class="fa fa-shopping-cart"></i> 
                                <span class="msg">New order received. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-failure">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-times-circle"></i>
                                <span class="msg">Application error!</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-fix">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-wrench"></i>
                                <span class="msg">Installation Succeeded.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success">
                                <span class="time">18 hrs</span>
                                <i class="fa fa-check"></i>
                                <span class="msg">Account Created. </span>
                            </a>
                        </li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Notifications</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="headerbardropdown"><span><i class="fa fa-level-down"></i></span></a>
            </li>
            <li class="dropdown demodrop">
                <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><i class="fa fa-magic"></i></a>

                <ul class="dropdown-menu arrow dropdown-menu-form" id="demo-dropdown">
                    <li>
                        <label for="demo-header-variations" class="control-label">Header Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-header-variations">
                            <li><a class="color-black" href="javascript:;"  data-headertheme="header-black.css"></a></li>
                            <li><a class="color-dark" href="javascript:;"  data-headertheme="default.css"></a></li>
                            <li><a class="color-red" href="javascript:;" data-headertheme="header-red.css"></a></li>
                            <li><a class="color-blue" href="javascript:;" data-headertheme="header-blue.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="demo-color-variations" class="control-label">Sidebar Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-color-variations">
                            <li><a class="color-lite" href="javascript:;"  data-theme="default.css"></a></li>
                            <li><a class="color-steel" href="javascript:;" data-theme="sidebar-steel.css"></a></li>
                            <li><a class="color-lavender" href="javascript:;" data-theme="sidebar-lavender.css"></a></li>
                            <li><a class="color-green" href="javascript:;" data-theme="sidebar-green.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="fixedheader">Fixed Header</label>
                        <div id="fixedheader" style="margin-top:5px;"></div> 
                    </li>
                </ul>
            </li>
        </ul>
    </header>



    <nav class="navbar navbar-default yamm" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse large-icons-nav" id="horizontal-navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="layout-horizontal.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="index.php"><i class="fa fa-columns"></i> <span>Layout</span></a></li>
                <li><a href="index.php"><i class="fa fa-group"></i> <span>Members</span></a></li>
                <li><a href="index.php"><i class="fa fa-pencil"></i> <span>Components</span></a></li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-users"></i> <span>Mega Menu <i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content clearfix show-grid">
                                <div class="row">
                                    <div class="col-sm-12">.col-sm-12</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">.col-sm-6</div>
                                    <div class="col-sm-6">.col-sm-6</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">.col-sm-4</div>
                                    <div class="col-sm-4">.col-sm-4</div>
                                    <div class="col-sm-4">.col-sm-4</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                    <div class="col-sm-3">.col-sm-3</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                    <div class="col-sm-2">.col-sm-2</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                    <div class="col-sm-1">.col-sm-1</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cog"></i> <span>Settings <i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Menu Item 1</a></li>
                        <li><a href="#">Menu Item 2</a></li>
                        <li><a href="#">Menu Item 3</a></li>
                        <li><a href="#">Menu Item 4</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>




    <div id="page-container">

        <!-- BEGIN RIGHTBAR -->
        <div id="page-rightbar">

            <div id="chatarea">
                <div class="chatuser">
                    <span class="pull-right">Jane Smith</span>
                    <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="chathistory">
                    <div class="chatmsg">
                        <p>Hey! How's it going?</p>
                        <span class="timestamp">1:20:42 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                        <span class="timestamp">1:20:46 PM</span>
                    </div>
                    <div class="chatmsg">
                        <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                        <span class="timestamp">1:20:54 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Alright, take care then.</p>
                        <span class="timestamp">1:21:01 PM</span>
                    </div>
                </div>
                <div class="chatinput">
                    <textarea name="" rows="2"></textarea>
                </div>
            </div>

            <div id="widgetarea">
                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="accsummary">
                        <div class="widget-block" style="background: #7ccc2e; margin-top:10px;">
                            <div class="pull-left">
                                <small>Current Balance</small>
                                <h5>$71,182</h5>
                            </div>
                            <div class="pull-right"><div id="currentbalance"></div></div>
                        </div>
                        <div class="widget-block" style="background: #595f69;">
                            <div class="pull-left">
                                <small>Account Type</small>
                                <h5>Business Plan A</h5>
                            </div>
                            <div class="pull-right">
                                <small class="text-right">Monthly</small>
                                <h5>$19<small>.99</small></h5>
                            </div>
                        </div>
                        <span class="more"><a href="#">Upgrade Account</a></span>
                    </div>
                </div>


                <div id="chatbar" class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="chatbody">
                        <ul class="chat-users">
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
                        </ul>
                        <span class="more"><a href="#">See all</a></span>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="taskbody">
                        <div class="contextual-progress" style="margin-top:10px;">
                            <div class="clearfix">
                                <div class="progress-title">Backend Development</div>
                                <div class="progress-percentage"><span class="label label-info">Today</span> 25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Bug Fix</div>
                                <div class="progress-percentage"><span class="label label-primary">Tomorrow</span> 17%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Preparing Documentation</div>
                                <div class="progress-percentage">6%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">App Development</div>
                                <div class="progress-percentage">20%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <span class="more"><a href="ui-progressbars.php">View all Pending</a></span>
                    </div>
                </div>

 

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="storagespace">
                        <div class="clearfix" style="margin-bottom: 5px;margin-top:10px;">
                            <div class="progress-title pull-left">1.31 GB of 1.50 GB used</div>
                            <div class="progress-percentage pull-right">87.3%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                            <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                            <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="serverstatus">
                        <div class="clearfix" style="padding: 10px 24px;">
                            <div class="pull-left">
                                <div class="easypiechart" id="serverload" data-percent="67">
                                        <span class="percent"></span>
                                </div>
                                <label for="serverload">Load</label>
                            </div>
                            <div class="pull-right">
                                <div class="easypiechart" id="ramusage" data-percent="20.6">
                                    <span class="percent"></span>
                                </div>
                                <label for="ramusage">RAM: 422MB</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END RIGHTBAR -->


<div id="page-content">
    <div id="wrap">
        <div id="page-heading">

            <ol class="breadcrumb">
              <li><a href="index.php">Dashboard</a></li>
              <li>Layout</li>
              <li class="active">Horizontal Navigation 1</li>
            </ol>

              <h1>Dashboard</h1>
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
                            <h4>Panel</h4>
                        </div>
                        <div class="panel-body">
                           <h3>Example Body</h3>
                           <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                           </p> 
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!-- #wrap -->
</div> <!-- page-content -->

















<?php include "footer.php" ?>