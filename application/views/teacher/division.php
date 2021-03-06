<div id="">
    <div id='wrap' >

        <div class="container" style="background-color: #ffffff;" >
            <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h4>User Accounts</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive datatables">
                                <table class="table datatables" style="margin-bottom: 0px;">
                                    <thead>
                                        <tr>
                                            <th class="col-xs-1 col-sm-1"><input type="checkbox" id="select-all"></th>
                                            <th class="col-xs-9 col-sm-3">User ID</th>
                                            <th class="col-sm-6 hidden-xs">Email Address</th>
                                            <th class="col-xs-2 col-sm-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class=" col-sm-12">
            <?php if($division_list != null){?>
                <form action="<?php echo base_url()?>teacher/list/" method="post">
                <select name="class_id" id="e1" class="form-control input-lg" onchange="this.form.submit()">
                <option value="">- - - Select - - -</option>
                <?php foreach($class_list as $d){          if($dv->dv_id == $c->dv_id){?>
                    <option value="<?php echo $d->class_id ?>"><?php echo $d->class_name.$d->class_group ?></option>
            <?php  }
                  } 
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
                                    </div>
                                </div>
                            </div>
                          <?php  }
                           }?>
                    

           

                        
                    <?php } 
                    }else{ ?>
                        


                    <?php } ?>

                        
                                <!-- <div class="tiles-footer">manage orders</div> -->
                          
                            
                            
                           
                    </div>
                </div>
            </div>

<script type="text/javascript">
    $('.itemName').select2({
    placeholder: '--- Select Item ---',
    });
</script>
