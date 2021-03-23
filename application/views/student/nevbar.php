
   
   <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="acc-menu" id="sidebar">
            <?php $url2 = $this->uri->segment('2'); 
            $url3 = $this->uri->segment('3'); 
            ?>
                <!-- <li class="divider"></li> -->
                <!-- <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>layout/layout_gd"><span>Grids</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout"><span>Horizontal Navigation</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_hori2"><span>Horizontal Navigation 2</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_fixd"><span>Fixed Boxed Layout</span></a></li>
                    </ul>
                </li> -->
               
                <li class="<?php if($url2 == "view")echo "active"?>"><a href="<?php echo base_url(); ?>student/view/<?php echo $url3; ?>" ><i class="fa fa-user"></i><span>ข้อมูลการฝึกงาน</span></a></li>
                <li class="<?php if($url2 == "calendar")echo "active"?>"><a href="<?php echo base_url(); ?>student/calendar/<?php echo $url3; ?>" ><i class="fa fa-user"></i><span>บันทึกการปฏิบัติงาน</span></a></li>  
                <li class="<?php if($url2 == "")echo "active"?>"><a href="<?php echo base_url(); ?>student/std_work/<?php echo $url3; ?>" ><i class="fa fa-user"></i><span>ข้อมูลการปฏิบัติงาน</span></a></li>
                <li class="<?php if($url2 == "")echo "active"?>"><a href="<?php echo base_url(); ?>student/std_worktime/<?php echo $url3; ?>" ><i class="fa fa-user"></i><span>ตารางลงเวลา</span></a></li>
                <li class="<?php if($url2 == "calendar")echo "active"?>"><a href="<?php echo base_url(); ?>student/calendar/<?php echo $url3; ?>" ><i class="fa fa-user"></i><span>บันทึกการปฏิบัติงาน</span></a></li>  
                <li class="<?php if($url2 == "file")echo "active"?>"><a href="<?php echo base_url(); ?>student/file/<?php echo $url3; ?>"><i class="fa fa-user"></i><span>ดาวน์โหลดเอกสาร</span></a></li>
                <li><a class="btn btn-default" data-toggle='modal' href='#logoutModal' ><i class="fa fa-sign-out"></i><span>ออกจากระบบ</span></a></li>
                
              
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

        
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">System : Are you sure to logout</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                        <h4>คุณต้องการที่จะออกจากระบบหรือไม่ ?</h4>

                                                    </div>
                                                    <div class="modal-footer">
                                                    <?php echo "<a type='button' class='btn btn-danger' href='".base_url()."logout'>ยืนยัน</a>";?>
                                                        <!-- <button type="button" class="btn btn-danger">ยืนยัน</button> -->
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
        <!-- BEGIN RIGHTBAR -->
        
        <!-- END RIGHTBAR -->
        



  