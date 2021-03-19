
<style>
    .panel-0{
    background-color: #11698e;
    border-color: #34495e;
    }
    .panel-1{
    background-color: #34495e;
    border-color: #34495e;
    }
    .panel-2{
    background-color: #16a085;
    border-color: #16a085;
    }
    .panel-3{
    background-color: #c0392b;
    border-color: #c0392b;
    }
    .panel-4{
    background-color: #1687a7;
    border-color: #c0392b;
    }
</style>
<div id='wrap' >

    <div class="row">
    <div class="col-md-12 ">
					<div class="panel panel-1">
	<div class="panel-body" >
                            <h4>ชื่อ : Suphachok  </h4>
                               
                                <div class="panel panel-1">
                                    <div class="panel-heading">
                                    <h4>อาจารย์นิเทศ</h4>
                                    </div>
                                    <div class="panel-body">
                                         <?php echo $this->session->flashdata("success"); 
                                         foreach($result_spv as $rs){
                                         ?>
                                            <div class="col-md-3 col-sm-6">
                                                 <div class="panel panel-2">
                                                    <div class="panel-heading">
                                                        <h4><?php echo $rs->subject_name ?></h4>
                                                    </div>  
                                                        <div class="panel-body">
                                                                <div class="col-md-12">
                                                                    <span>วันที่ประเมิน <?php echo $rs->approve_date ?></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <span>ระยะเวลาฝึกงาน <?php echo $rs->start_date." ถึง ".$rs->end_date ?></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <span>ฝึกงานที่ <?php echo $rs->company_name ?></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <span>ผู้ประเมิน <?php echo $rs->spv_title." ".$rs->spv_fname." ".$rs->spv_lname ?></span>
                                                                </div>
                                                                <div class="col-md-12 text-right" style="padding-top:20px">
                                                                    <a href="<?php 
                                                                    $spv_id = $rs->spv_contact_id ; 
                                                                    echo base_url()."contact/supervision_view/$spv_id" ?>">
                                                                    <button class="btn btn-brown">ดูแบบประเมิน</button>
                                                                    </a>
                                                                </div>

                                                        </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="col-md-3 col-sm-6">
                                                 <div class="panel panel-1">
                                                        <div class="panel-body">
                                                                <div class="col-md-12 text-center">
                                                                   <a href="<?php
                                                                    $url = $this->uri->segment('3');
                                                                    echo base_url()."contact/supervision_insert/$url" 
                                                                    ?>"><button class="btn btn-primary"> เพิ่มการประเมิน</button></a>

                                                                </div>

                                                            </div>
                                                        </div>
                                                </div>
                                             </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    </div>
                </div>
			
            </div>
        </div>



