
    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form>
                        <input type="text" class="search-query" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>main"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <!-- <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>layout/layout_gd"><span>Grids</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout"><span>Horizontal Navigation</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_hori2"><span>Horizontal Navigation 2</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_fixd"><span>Fixed Boxed Layout</span></a></li>
                    </ul>
                </li> -->
                <li><a href="javascript:;"><i class="fa fa-list-ol"></i> <span>UI Elements</span></a>
                    <ul class='acc-menu'>
                        <li><a href="<?php echo base_url(); ?>ui_element">Typography</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_element/btn">Buttons</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_element/table_basic">Tables</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_element/forms">Forms</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_element/panels">Panels</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_element/images">Images</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-tasks"></i> <span>UI Components</span> </a>
                    <ul class="acc-menu">
                    <!-- <span class="badge badge-info">12</span> -->
                        <li><a href="<?php echo base_url(); ?>ui_component">Tiles</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/modals">Modals &amp; Bootbox</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Progress Bars</a></li>
						<li><a href="<?php echo base_url(); ?>ui_component/">Pagers &amp; Paginations</a></li>
						<li><a href="<?php echo base_url(); ?>ui_component/">Breadcrumbs</a></li>
						<li><a href="<?php echo base_url(); ?>ui_component/">Labels &amp; Badges</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Alerts &amp; Notificiations</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Sliders &amp; Ranges</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Tabs &amp; Accordions</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Carousel</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Nestable Lists</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Wells</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_component/">Tour</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>ui_table">Tables test</a></li>
                       
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Student</span></a>
                    <!-- <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>ui_table">Class</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">Company</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">division</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">student</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">teacher</a></li>
                    </ul> -->
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Teacher</span></a>
                    <!-- <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>ui_table">Class</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">Company</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">division</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">student</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">teacher</a></li>
                    </ul> -->
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Company</span></a>
                    <!-- <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>ui_table">Class</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">Company</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">division</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">student</a></li>
                        <li><a href="<?php echo base_url(); ?>ui_table">teacher</a></li>
                    </ul> -->
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Admin</span></a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>"> - Class</a></li>
                        <li><a href="<?php echo base_url(); ?>"> - Company</a></li>
                        <li><a href="<?php echo base_url(); ?>"> - division</a></li>
                        <li><a href="<?php echo base_url(); ?>"> - student</a></li>
                        <li><a href="<?php echo base_url(); ?>manage_teacher"> - teacher</a></li>
                    </ul>
                </li>
                
               
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

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
                            <li data-stats="online"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="<?php echo base_url(); ?>assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
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
                        
                        <span class="more"><a href="ui-progressbars.htm">View all Pending</a></span>
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