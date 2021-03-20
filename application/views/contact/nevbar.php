<style>
    .page-header{
        margin:10px;
    }
</style>
   
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
               
                <li class="<?php if($url == "")echo "active"?>"><a href="<?php echo base_url(); ?>contact/manage_internbook" ><i class="fa fa-user"></i><span>บันทึกการปฏิบัติงาน</span></a></li>  
                <li class="<?php if($url == "")echo "active"?>"><a href="<?php echo base_url(); ?>contact/manage_interntime"><i class="fa fa-user"></i><span>เวลาการปฎิบัติงาน</span></a></li>
                <li class="<?php if($url == "")echo "active"?>"><a href="javascript:;"><i class="fa fa-table"></i> <span>ประเมินผลการนิเทศ</span></a>
                    <ul class="acc-menu">
                    <?php foreach($result_subject as $rs){
                            $subject_id = $rs->subject_id;
                         ?>
                        <li class="active"><a href="<?php echo base_url()."contact/subject/$subject_id" ?>"> - <?php echo $rs->subject_name ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
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

        <!-- BEGIN RIGHTBAR -->
        
        <!-- END RIGHTBAR -->



 