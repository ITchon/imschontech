<style>

.select{
  height: 38px
}
</style>
<div id="">
<div id="page-content">
    <div id='wrap' >
        <div class="container" style="min-height: 752px;background-color:#ffffff" >
            <div class="row">
            <div class=" col-sm-12">
            <?php if($division_list != null){?>
                <form action="<?php echo base_url()?>teacher/list/" method="post">
                <select name="class_id" id="e1" class="form-control input-lg division" onchange="this.form.submit()">
                <option value="">- - - Select - - -</option>
                <?php foreach($class_list as $d){          if($dv->dv_id == $c->dv_id){?>
                    <option value="<?php echo $d->class_id ?>"><?php echo $d->class_name.$d->class_group ?></option>
            <?php  }
                  } 
            ?>
            </select>
            </form>
            <br>
            </div>

   
                        <?php 
                        if(isset($division_list)){

                            foreach($division_list as $dv){ ?>
                            <div class="col-md-6">
                                <div class="panel panel-midnightblue">
    
                                        <span style="color:#34495e;font-size:34px"><?php echo $dv->dv_name ?></span>

                                    <div class="panel-body">
                                        <?php foreach($class_list as $c){ 
                                              if($dv->dv_id == $c->dv_id){?>
                                                <div class="col-sm-6">
                                                    <a class="info-tiles btn-midnightblue-alt" href="<?php echo base_url(); ?>teacher/list/<?php echo $c->class_id ?>">
                                                        <div class="tiles-body-alt">
                                                            <div class="text-center" ><?php echo $c->class_name.$c->class_group ?></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <?php } ?>
                                                <?php  }?>
                                    </div>
                                </div>
                            </div>
                    

           

                        
                    <?php } 
                    }else{ ?>
                        


                    <?php } 
                 }
                 ?>

                        
                                <!-- <div class="tiles-footer">manage orders</div> -->
                          
                            
                            
                           
                    </div>
                </div>
            </div>