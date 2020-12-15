<div id="">
    <div id='wrap' >

        <div class="container" style="background-color: #ffffff;" >
            <div class="row">
            <div class=" col-sm-12">
            <form action="<?php echo base_url()?>teacher/list/" method="post">
            <select name="class_id" id="e1" class="form-control" onchange="this.form.submit()">
            <option value="">- - - Select - - -</option>
            <?php foreach($dv_class_list as $d){ ?>
            <option value="<?php echo $d->class_id ?>"><?php echo $d->class_name.$d->class_group ?></option>
            <?php } ?>
            </select>
            </form>
            <br>
            </div>
                <div class="col-md-12">
                        <?php foreach($division_list as $dv){ ?>
                            <div class=" col-sm-6">
                            <a class="info-tiles tiles-midnightblue " href="">
                                <!-- <div class="tiles-heading">Revenue</div> -->
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center "><?php echo $dv->dv_name ?></div>
                                </div>
                                <!-- <div class="tiles-footer">go to accounts</div> -->
                            </a>
                            <?php foreach($class as $d){ 
                                foreach($d as $c){
                                if($c->dv_id == $dv->dv_id){
                                ?>
                            <div class="col-sm-6">
                            <a class="info-tiles btn-midnightblue-alt" href="<?php echo base_url(); ?>teacher/list/<?php echo $c->class_id ?>">
                                <!-- <div class="tiles-heading">Revenue</div> -->
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><?php echo $c->class_name.$c->class_group ?></div>
                                    
                                </div>
                                <!-- <div class="tiles-footer">go to accounts</div> -->
                            </a>
                        </div>
                        <?php 
                            }    
                        }
                    }?>
                        </div>
                    <?php } ?>

                        
                                <!-- <div class="tiles-footer">manage orders</div> -->
                            </a>
                            
                            
                           
                    </div>
                </div>
            </div>

            <script type="text/javascript">


$('.itemName').select2({
  placeholder: '--- Select Item ---',
});


</script>
