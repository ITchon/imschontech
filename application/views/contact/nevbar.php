
   
   <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
            <?php $url = $this->uri->segment('2'); ?>
                <!-- <li class="divider"></li> -->
                <li class="<?php if($url == "division")echo "active"?>"><a href="<?php echo base_url(); ?>main"><i class="fa fa-home"></i> <span>หน้าหลัก</span></a></li>
                <!-- <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>layout/layout_gd"><span>Grids</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout"><span>Horizontal Navigation</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_hori2"><span>Horizontal Navigation 2</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_fixd"><span>Fixed Boxed Layout</span></a></li>
                    </ul>
                </li> -->
               
                <li class="<?php if($url == "")echo "active"?>"><a href="<?php echo base_url(); ?>contact/manage_internbook" ><i class="fa fa-user"></i><span>จัดการสมุดฝึกงาน</span></a></li>  
                <li class="<?php if($url == "")echo "active"?>"><a href="<?php echo base_url(); ?>contact/student"><i class="fa fa-user"></i><span>นักเรียน</span></a></li>
                <li class="<?php if($url == "")echo "active"?>"><a href="javascript:;"><i class="fa fa-table"></i> <span>ประเมินผลการนิเทศ</span></a>
                    <ul class="acc-menu">
                    <?php foreach($result_subject as $rs){
                            $subject_id = $rs->subject_id;
                         ?>
                        <li class="active"><a href="<?php echo base_url()."contact/subject/$subject_id" ?>"> - <?php echo $rs->subject_name ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <li class="<?php if($url == "")echo "active"?>"><a href="<?php echo base_url(); ?>contact/document"><i class="fa fa-user"></i><span>ดาวน์โหลดเอกสาร</span></a></li>
              
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
        
        <!-- END RIGHTBAR -->



 