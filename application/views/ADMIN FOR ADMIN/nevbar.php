
   
   <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
             
                <!-- <li class="divider"></li> -->
                <li><a href="<?php echo base_url(); ?>main"><i class="fa fa-home"></i> <span>หน้าหลัก</span></a></li>
                <!-- <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>layout/layout_gd"><span>Grids</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout"><span>Horizontal Navigation</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_hori2"><span>Horizontal Navigation 2</span></a></li>
                        <li><a href="<?php echo base_url(); ?>layout/layout_fixd"><span>Fixed Boxed Layout</span></a></li>
                    </ul>
                </li> -->
               
                <li><a href="<?php echo base_url(); ?>manage_division"><i class="fa fa-home"></i><span>แผนก</span></a></li>
                <li><a href="<?php echo base_url(); ?>Company"><i class="fa fa-building"></i><span>สถานประกอบการ</span></a></li>
                
                <li><a href="<?php echo base_url(); ?>manage_teacher"><i class="fa fa-user"></i><span>อาจารย์</span></a></li>
                <li><a href="<?php echo base_url(); ?>manage_user"><i class="fa fa-user"></i><span>ผู้ใช้งานในระบบ</span></a></li>
                <li><a href="<?php echo base_url(); ?>manage_contact"><i class="fa fa-user"></i> <span>ผู้คุมการฝึกงาน</span></a></li>
                <li><a href="<?php echo base_url(); ?>manage_student"><i class="fa fa-user"></i><span>นักเรียน</span></a></li>
                <li><a href="<?php echo base_url(); ?>Classs"><i class="fa fa-circle"></i><span>ชั้นเรียน</span></a></li>
                <li><a href="<?php echo base_url(); ?>manage_train"><i class="fa fa-suitcase"></i><span>การฝึกงาน</span></a></li>
                <li><a href="<?php echo base_url(); ?>manage_asm"><i class="fa fa-list-ul"></i><span>การสร้างแบบประเมินผล</span></a></li>
                <li><a class="btn btn-default" data-toggle='modal' href='#logoutModal' ><i class="fa fa-sign-out"></i><span>ออกจากระบบ</span></a></li>
                <!-- <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Admin</span></a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo base_url(); ?>manage_contact"> Contact</a></li>
                         Train</a></li> -->
                         <!-- Class</a></li>
                         Company</a></li>
                         division</a></li>
                         student</a></li>
                        <li><a href="<?php echo base_url(); ?>manage_teacher"> teacher</a></li>
                    </ul>
                </li> -->
                
                
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
                                                        <h4 class="modal-title">TaiSoul Say Are u sure about that???</h4>
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
        



  