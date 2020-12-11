<div id="">
    <div id='wrap' >
        <div id="page-heading">
            <!-- <ol class="breadcrumb">
                <li class='active'><a href="<?php echo base_url(); ?>main">Dashboard</a></li>
            </ol> -->
            <h1><?php echo ucfirst($this->uri->segment('2')) ?></h1>
           
        </div>

        <div class="container" style="background-color: #e5e5e5;" >
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="<?php echo base_url(); ?>Student/view">
                                <!-- <div class="tiles-heading">Revenue</div> -->
                                <div class="tiles-body-alt">
                                    <i class="fa fa-4x fa-eye"></i>
                                    <div class="text-center ">View</div>
                                    <small>-13.5% from last week</small>
                                </div>
                                <!-- <div class="tiles-footer">go to accounts</div> -->
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url(); ?>Student/calendar">
                                <!-- <div class="tiles-heading">Profit</div> -->
                                <div class="tiles-body-alt">
                                    <i class="fa fa-calendar"></i>
                                    <div class="text-center">Calendar</div>
                                    <small>+8.7% from last period</small>
                                </div>
                                <!-- <div class="tiles-footer">more info</div> -->
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-orange" href="#">
                                <!-- <div class="tiles-heading">Members</div> -->
                                <div class="tiles-body-alt">
                                    <i class="fa fa-comments-o"></i>
                                    <div class="text-center">Chat</div>
                                    <small>new users registered</small>
                                </div>
                                <!-- <div class="tiles-footer">manage members</div> -->
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="<?php echo base_url(); ?>Student/profile">
                                <!-- <div class="tiles-heading">Orders</div> -->
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">Profile</div>
                                    <small>new orders received</small>
                                </div>
                                <!-- <div class="tiles-footer">manage orders</div> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>