
   
   <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
            <?php $url2 = $this->uri->segment('2'); 
            $url3 = $this->uri->segment('3'); 
            ?>
                <!-- <li class="divider"></li> -->
                <li class="<?php if($url2 == "")echo "open active hasChild"?>"><a href="<?php echo base_url(); ?>main"><i class="fa fa-home"></i> <span>หน้าหลัก</span></a></li>
                <li class="<?php if($url2 == "std_data")echo "open active hasChild"?>"><a href="<?php echo base_url(); ?>teacher/student" ><i class="fa fa-user"></i><span>รายชื่อนักเรียน</span></a></li>
                <li class="<?php if($url2 == "division" || $url2 == "list")echo "open active hasChild"?>"><a href="<?php echo base_url(); ?>teacher/division"><i class="fa fa-user"></i><span>รายชื่อแผนก</span></a></li>
                <li class="<?php if($url2 == "std_work")echo "open active hasChild"?>"><a href="<?php echo base_url(); ?>teacher/std_work"><i class="fa fa-user"></i><span>ข้อมูลการปฏิบัติงาน</span></a></li>
                <li class="<?php if($url2 == "" )echo "open active hasChild"?>"><a href="<?php echo base_url(); ?>manage_student"><i class="fa fa-user"></i><span>แบบฟอร์มการประเมิน</span></a>
                <li class="<?php if($url2 == "" || $url2 == "supervision_insert" || $url2 =="supervision_view_th" )echo "open active hasChild"?>"><a><i class="fa fa-table"></i> <span>แบบประเมินออกฝึกงาน</span></a>
                    <ul class="acc-menu" style="display: block;">
                    <?php foreach($result_subject as $rs){
                            $subject_id = $rs->subject_id;
                            $active = "";
                            if($url3 == $rs->subject_id) $active = "active";
                         ?>
                        <li class=" <?php echo $active ?>" ><a href="<?php echo base_url()."teacher/subject/$subject_id" ?>"> - <?php echo $rs->subject_name ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <li><a class="btn btn-default" href="<?php echo base_url()?>logout" ><i class="fa fa-sign-out"></i><span>ออกจากระบบ</span></a></li>

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



 