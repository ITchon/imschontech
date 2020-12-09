<div id="">
    <div id='wrap' >



        <div class="container" style="background-color: #ffffff;" >
            <div class="row">
                <div class="col-md-12">
                    
                        <?php foreach($division_list as $dv){ ?>
                            <div class=" col-sm-6">
                            <a class="info-tiles tiles-success" href="">
                                <!-- <div class="tiles-heading">Revenue</div> -->
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><?php echo $dv->dv_name ?></div>
                                </div>
                                <!-- <div class="tiles-footer">go to accounts</div> -->
                            </a>
                            <?php foreach($class_list as $c => $dv_chk){ 
                                if($dv_chk == $dv->dv_id){
                                ?>
                            <div class="col-sm-6">
                            <a class="info-tiles tiles-danger" href="<?php echo base_url(); ?>teacher/list/"<?php echo $dv->dv_id ?>>
                                <!-- <div class="tiles-heading">Revenue</div> -->
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><?php echo $c ?></div>
                                    
                                </div>
                                <!-- <div class="tiles-footer">go to accounts</div> -->
                            </a>
                        </div>
                        <?php 
                            }    
                        }?>
                        </div>
                    <?php } ?>

                        
                                <!-- <div class="tiles-footer">manage orders</div> -->
                            </a>
                            
                            
                           
                    </div>
                </div>
            </div>