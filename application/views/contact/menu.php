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
                        
                        <!-- <div class="col-md-4 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="<?php echo base_url(); ?>contact/trainer">
                                <div class="tiles-heading">Revenue</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-money"></i>
                                    <div class="text-center ">  </div>
                                    <small>แผนกที่ควบคุม</small>
                                </div>
                                <div class="tiles-footer">go to accounts</div>
                            </a>
                        </div> -->

                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-primary" href="<?php echo base_url(); ?>contact/trainer">
                                <!-- <div class="tiles-heading">Profit</div> -->
                                <div class="tiles-body-alt">
                                    <i class="fa fa-user"></i>
                                    <div class="text-center">นักศึกษาฝึกงาน</div>
                                    <small>ดูรายละเอียดน้อนๆ</small>
                                </div>
                                <!-- <div class="tiles-footer">more info</div> -->
                            </a>
                        </div>

                        <div class="col-md-6 col-xs-12 col-sm-6">
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

                        <!-- <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="<?php echo base_url(); ?>contact/profile">
                                <div class="tiles-heading">Orders</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">Profile</div>
                                    <small>new orders received</small>
                                </div>
                                <div class="tiles-footer">manage orders</div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>