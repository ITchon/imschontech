
<?php 
    echo '<button value='.$date.' id="Textheader" hidden></button>';
 ?>

<div class="container">
			<div class="row">
            <?php foreach($result as $r ){
                $dt = new DateTime($r->start_event);
                $date_event = $dt->format('Y-m-d');
                $time = $dt->format('H:i');
                ?>
				<div class="col-md-12">
					<h4 class="timeline-month"><span><?php echo $time ?></span></h4>
					<ul class="timeline">
						<li class="timeline-midnightblue">
							<div class="timeline-icon"><i class="fa fa-camera"></i></div>
							<div class="timeline-body">
								<div class="timeline-content">
								<?php 
								foreach($result_img as $row){
									if($r->id == $row->id){	?>
										<img src="<?php echo base_url()."uploads/$row->img_code"?>"  alt="" class="pull-left img-responsive">
									<?php
									}
								} ?>
								</div>
								<div class="timeline-footer">
								</div>

							</div>
						</li>
						<li class="timeline-primary">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">

								<div class="timeline-content">
									<h3><b><?php echo $r->title ?></b></h3><hr>
									<textarea name="description" readonly id="" style="background-color:#ffffff;border:none;cursor: not-allowed;font-size:24px" class="form-control texarea-show" cols="20" rows="3"><?php echo $r->description ?></textarea><br>
								</div>

							</div>
						</li>
					</ul>
                    <hr>
				</div>
          
                <?php } ?>
			</div>


		</div> <!-- container -->