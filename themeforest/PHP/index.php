<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="index.htm">Dashboard</a></li>
            </ol>

            <h1>Dashboard</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <button class="btn btn-default" id="daterangepicker2">
                        <i class="fa fa-calendar-o"></i> 
                        <span class="hidden-xs hidden-sm"><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                    </button>
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="#">
                                <div class="tiles-heading">Profit</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">$</span>854</div>
                                    <small>+8.7% from last period</small>
                                </div>
                                <div class="tiles-footer">more info</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="#">
                                <div class="tiles-heading">Revenue</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><span class="text-top">$</span>22.7<span class="text-smallcaps">k</span></div>
                                    <small>-13.5% from last week</small>
                                </div>
                                <div class="tiles-footer">go to accounts</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-orange" href="#">
                                <div class="tiles-heading">Members</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">109</div>
                                    <small>new users registered</small>
                                </div>
                                <div class="tiles-footer">manage members</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="#">
                                <div class="tiles-heading">Orders</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="text-center">57</div>
                                    <small>new orders received</small>
                                </div>
                                <div class="tiles-footer">manage orders</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">User Report <small>(weekly)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">this week</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">previous week</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="site-statistics" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-grape">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Annual Sales <small>(by quarter)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">2012</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2011</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2010</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="budget-variance" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Site Reports <small>(overview)</small></h4>
                                    <div class="pull-right">
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-refresh"></i></a>
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-wrench"></i></a>
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-cog"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexvisits" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">7,451</h3>
                                    <p style="text-align: center; margin: 0;">Visits</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexpageviews" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">35,711</h3>
                                    <p style="text-align: center; margin: 0;">Page Views</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexpagesvisit" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">6.92</h3>
                                    <p style="text-align: center; margin: 0;">Pages / Visit</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexavgvisit" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">00:04:17</h3>
                                    <p style="text-align: center; margin: 0;">Average Visit Time</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexnewvisits" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">71.27%</h3>
                                    <p style="text-align: center; margin: 0;">New Visits</p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexbouncerate" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">31.08%</h3>
                                    <p style="text-align: center; margin: 0;">Bounce Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-alizarin" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Comments</div>
                            <div class="pull-right">+15.6%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-comments-o"></i></div>
                            <div class="pull-right"><div id="indexinfocomments" style="margin-top: 10px; margin-bottom: -10px;"></div></div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-orange" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Likes</div>
                            <div class="pull-right">-5.5%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="pull-right"><div id="indexinfolikes" style="margin-top: 10px; margin-bottom: -10px;"></div></div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-success" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Bugs Fixed</div>
                            <div class="pull-right">+14.9%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-check"></i></div>
                            <div class="pull-right">37</div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-toyo" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Downloads</div>
                            <div class="pull-right">-9.8%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-download"></i></div>
                            <div class="pull-right">3.67<span class="text-smallcaps">k</span></div>
                        </div>
                    </a>
                </div>

                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-grape">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Visitor Statistics <small>(overview)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" id="updatePieCharts" class="btn btn-default-alt btn-sm">Refresh</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <div class="easypiechart" id="returningvisits" data-percent="65">
                                        <span class="percent"></span>
                                    </div>
                                    <label for="newvisits">Returning Visits</label>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <span class="easypiechart" id="newvisitor" data-percent="81">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="bouncerate">New Visitor</label>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <span class="easypiechart" id="clickrate" data-percent="42">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="clickrate">Click Rate</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-orange">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Server Load</h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">Server #1</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">Server #2</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="server-load" style="height:125px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            <div class="row">        
                <div class="col-md-6">
                    <div class="panel panel-indigo">
                        <div class="panel-heading">
                            <h4>User Accounts</h4>
                            <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" style="margin-bottom: 0px;">
                                    <thead>
                                        <tr>
                                            <th class="col-xs-1 col-sm-1"><input type="checkbox" id="select-all"></th>
                                            <th class="col-xs-9 col-sm-3">User ID</th>
                                            <th class="col-sm-6 hidden-xs">Email Address</th>
                                            <th class="col-xs-2 col-sm-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>cranston</td>
                                            <td class="hidden-xs">cranstonb@gnail.com</td>
                                            <td><span class="label label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>aaron</td>
                                            <td class="hidden-xs">ppaul@lime.com</td>
                                            <td><span class="label label-grape">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>norris</td>
                                            <td class="hidden-xs">j.norris@gnail.com</td>
                                            <td><span class="label label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>gunner</td>
                                            <td class="hidden-xs">gunner@outluk.com</td>
                                            <td><span class="label label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>mrford</td>
                                            <td class="hidden-xs">fordm@gnail.com</td>
                                            <td><span class="label label-grape">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>stewrtt</td>
                                            <td class="hidden-xs">swttrs@outluk.com</td>
                                            <td><span class="label label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="active">
                                            <td colspan="4" class="text-left">
                                                <label for="action" style="margin-bottom:0">Action </label>
                                                <select name="action">
                                                    <option value="Edit">Edit</option>
                                                    <option value="Aprove">Aprove</option>
                                                    <option value="Move">Move</option>
                                                    <option value="Delete">Delete</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-grape">
                        <div class="panel-heading">
                              <h4><i class="icon-highlight fa fa-check"></i> To-do List</h4>
                              <!-- <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div> -->
                        </div>
                        <div class="panel-body">
                            <ul class="panel-tasks">
                                <li class="item-danger">
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Write documentation for theme</span>
                                        <span class="label label-info">6 Days</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-primary">
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Compile code</span>
                                        <span class="label label-primary">3 Days</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-info">
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Upload files to server</span>
                                        <span class="label label-orange">Tomorrow</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-success">
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Call client</span>
                                        <span class="label label-danger">Today</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Buy some milk</span>
                                        <span class="label label-danger">Today</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Setup meeting with client</span>
                                        <span class="label label-sky">2 Weeks</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>
                                        <i class="fa fa-ellipsis-v icon-dragtask"></i>
                                        <input type="checkbox"> 
                                        <span class="task-description">Pay office rent and bills</span>
                                        <span class="label label-sky">3 Weeks</span>
                                    </label>
                                    <div class="options todooptions">
                                        <div class="btn-group">
                                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-cog"></i></button>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                            <a href="#" class="btn btn-success btn-sm pull-left">Add Tasks</a>
                            <a href="#" class="btn btn-default-alt btn-sm pull-right">See All Tasks</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                              <h4><i class="icon-highlight fa fa-calendar"></i> Calendar</h4>
                              <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body" id="calendardemo">
                              <div id='calendar-drag'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                              <h4>
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#threads" data-toggle="tab"><i class="fa fa-list visible-xs icon-scale"></i><span class="hidden-xs">Threads</span></a></li>
                                  <li><a href="#comments" data-toggle="tab"><i class="fa fa-comments visible-xs icon-scale"></i><span class="hidden-xs">Comments</span></a></li>
                                  <li><a href="#users" data-toggle="tab"><i class="fa fa-group visible-xs icon-scale"></i><span class="hidden-xs">Users</span></a></li>
                                </ul>
                              </h4>
                              <!-- <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                              </div> -->
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="threads">
                                    <ul class="panel-threads">
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">20 mins</span>
                                                <a href="#" class="title">Envato’s Most Wanted – $5,000 Reward for Music & Band Themes and Templates</a>
                                                <span class="thread">asked by <a href="#">Jim Gordon</a> in <a href="#">Section #3</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">2 hrs</span>
                                                <a href="#" class="title">How to create a corporate wordpress theme?</a>
                                                <span class="thread">asked by <a href="#">Simon Corbett</a> in <a href="#">Section #15</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">4 hrs</span>
                                                <a href="#" class="title">Which cart is growing in popularity - WOOCOMMERCE or OPENCART? And which one would you choose?</a>
                                                <span class="thread">asked by <a href="#">Jeff Dangerfield</a> in <a href="#">Section #9</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/doyle.png" alt="Doyle">
                                            <div class="content">
                                                <span class="time">13 hrs</span>
                                                <a href="#" class="title">Pros and Cons of Using Grids in Responsive Web Design</a>
                                                <span class="thread">asked by <a href="#">Alan Doyle</a> in <a href="#">Section #11</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jackson.png" alt="Jackson">
                                            <div class="content">
                                                <span class="time">19 hrs</span>
                                                <a href="#" class="title">Best Web & Graphic Design Proposal Software</a>
                                                <span class="thread">asked by <a href="#">Eric Jackson</a> in <a href="#">Section #18</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">20 mins</span>
                                                <a href="#" class="title">Envato’s Most Wanted – $5,000 Reward for Music & Band Themes and Templates</a>
                                                <span class="thread">asked by <a href="#">Jim Gordon</a> in <a href="#">Section #3</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">2 hrs</span>
                                                <a href="#" class="title">How to create a corporate wordpress theme?</a>
                                                <span class="thread">asked by <a href="#">Simon Corbett</a> in <a href="#">Section #15</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">4 hrs</span>
                                                <a href="#" class="title">Which cart is growing in popularity - WOOCOMMERCE or OPENCART? And which one would you choose?</a>
                                                <span class="thread">asked by <a href="#">Jeff Dangerfield</a> in <a href="#">Section #9</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/doyle.png" alt="Doyle">
                                            <div class="content">
                                                <span class="time">13 hrs</span>
                                                <a href="#" class="title">Pros and Cons of Using Grids in Responsive Web Design</a>
                                                <span class="thread">asked by <a href="#">Alan Doyle</a> in <a href="#">Section #11</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jackson.png" alt="Jackson">
                                            <div class="content">
                                                <span class="time">19 hrs</span>
                                                <a href="#" class="title">Best Web & Graphic Design Proposal Software</a>
                                                <span class="thread">asked by <a href="#">Eric Jackson</a> in <a href="#">Section #18</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default-alt btn-sm pull-right">Load More</a>
                                </div>
                                <div class="tab-pane" id="comments">
                                    <ul class="panel-comments">
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Jim Gordon</a> commented on <a href="#">Article #121</a></span>
                                                Just wondering - can random users see our comments? If so, allow them to comment!
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Simon Corbett</a> commented on <a href="#">Article #55</a></span>
                                                Not sure what changed but for the last few weeks a few of my regulars are having their comments held for moderation.
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Corbett">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Polly Paton</a> commented on <a href="#">Article #12</a></span>
                                                I’m sure there is a tool for that. 
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/watson.png" alt="Watson">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Annie Watson</a> commented on <a href="#">Article #223</a></span>
                                                We have enough problems with Spammers already without letting non members leave comments.
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Jim Gordon</a> commented on <a href="#">Article #121</a></span>
                                                Just wondering - can random users see our comments? If so, allow them to comment!
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Simon Corbett</a> commented on <a href="#">Article #55</a></span>
                                                Not sure what changed but for the last few weeks a few of my regulars are having their comments held for moderation.
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Corbett">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Polly Paton</a> commented on <a href="#">Article #12</a></span>
                                                I’m sure there is a tool for that. 
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/watson.png" alt="Watson">
                                            <div class="content">
                                                <span class="actions"><div class="options"><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button></div></div></span>
                                                <span class="commented"><a href="#">Annie Watson</a> commented on <a href="#">Article #223</a></span>
                                                We have enough problems with Spammers already without letting non members leave comments.
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default-alt btn-sm pull-right">Load More</a>
                                </div>
                                <div class="tab-pane" id="users">
                                    <ul class="panel-users">
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Paton">
                                            <div class="content">
                                                <span class="time">11 mins</span>
                                                <span class="desc"><a href="#">Polly Paton</a> followed <a href="#">John White</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/tennant.png" alt="Tennant">
                                            <div class="content">
                                                <span class="time">48 mins</span>
                                                <span class="desc"><a href="#">David Tennant</a> unfollowed <a href="#">Tony Doubleday</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jobs.png" alt="Jobs">
                                            <div class="content">
                                                <span class="time">5 hrs</span>
                                                <span class="desc"><a href="#">Howard Jobs</a> commented on <a href="#">Selling PSD Template Rights!</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">6 hrs</span>
                                                <span class="desc"><a href="#">Jeff Dangerfield</a> posted on <a href="#">Please help with Theme Design</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">22 hrs</span>
                                                <span class="desc"><a href="#">Jim Gordon</a> followed <a href="#">Polly Paton</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">3 days</span>
                                                <span class="desc"><a href="#">Simon Corbett</a> followed <a href="#">Anna Johansson</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Paton">
                                            <div class="content">
                                                <span class="time">11 mins</span>
                                                <span class="desc"><a href="#">Polly Paton</a> followed <a href="#">John White</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/tennant.png" alt="Tennant">
                                            <div class="content">
                                                <span class="time">48 mins</span>
                                                <span class="desc"><a href="#">David Tennant</a> unfollowed <a href="#">Tony Doubleday</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jobs.png" alt="Jobs">
                                            <div class="content">
                                                <span class="time">5 hrs</span>
                                                <span class="desc"><a href="#">Howard Jobs</a> commented on <a href="#">Selling PSD Template Rights!</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">6 hrs</span>
                                                <span class="desc"><a href="#">Jeff Dangerfield</a> posted on <a href="#">Please help with Theme Design</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">22 hrs</span>
                                                <span class="desc"><a href="#">Jim Gordon</a> followed <a href="#">Polly Paton</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">3 days</span>
                                                <span class="desc"><a href="#">Simon Corbett</a> followed <a href="#">Anna Johansson</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default-alt btn-sm pull-right">Load More</a>
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