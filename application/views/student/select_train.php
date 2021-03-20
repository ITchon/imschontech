                        <?php $t_id = $this->uri->segment('3') ?>    
<div id="page-content">
				<div id='wrap' >
				  	 <div class="row">

						<div class="col-md-12">                  
                            <div class="panel panel-midnightblue">
                                <div class="panel-body">
                                    <form action="<?php echo base_url()."student/redirect/"?>" method="post" >
                                                                                
    										<div class="col-sm-3 col-xs-3">
											<select name="train_id" class="form-control">
											<option value="">--เลือกภาคเรียน--</option>
											<?php
												foreach($train_select as $r){
													if($t_id == $r->t_id)$selected= "selected";
													else $selected= "";
													?>
													<option <?php echo $selected ?> value="<?php echo $r->t_id ?>"><?php echo $r->term ?></option>		
												<?php
												}
											 ?>
											</select>
									
    										</div>
											<input type="hidden" name="url" value="<?php echo $this->uri->segment('2') ?>">
											<input type="submit" class="btn btn-primary" value="เลือกภาคเรียน">
											</form>
											
											
    										

    									