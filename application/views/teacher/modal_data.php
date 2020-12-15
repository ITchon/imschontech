
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
						<li class="timeline-success">
							<div class="timeline-icon"><i class="fa fa-camera"></i></div>
							<div class="timeline-body">
								<div class="timeline-content">
									<img src="assets/demo/images/thmb_nature_enchantedcreek.jpg" alt="" class="pull-left">
								</div>
							</div>
						</li>
						<li class="timeline-warning">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">

								<div class="timeline-content">
									<h3><?php echo $r->title ?></h3>
									<p><?php echo $r->description ?></p>
								</div>
							</div>
						</li>
					</ul>
                    
                    <?php } ?>
                </div>
                <form id="form" action="<?php echo base_url()?>teacher/confirm" method="post">
						<!-- <?php echo "<a href='".base_url()."teacher/confirm/".$date ."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='fa fa-check'></i></a>";   ?> -->
							<input id="std_id" type="hidden" name="std_id" value="<?php echo $std_id?>">
							<input type="hidden" name="date" value="<?php echo $date?>">
						<?php echo "<button class='btn btn-success' type='submit' onclick='return confirm(\"Confirm Delete Item\")' >ยืนยัน</button>";?>
					</form>

					<form id="form" action="<?php echo base_url()?>teacher/no_confirm" method="post">
						<!-- <?php echo "<a href='".base_url()."teacher/no_confirm/".$date ."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='fa fa-ban'></i></a>";   ?> -->
							<input type="hidden" name="std_id" value="<?php echo $std_id?>">
							<input type="hidden" name="date" value="<?php echo $date?>">
						<?php echo "<button class='btn btn-danger' type='submit' onclick='return confirm(\"Confirm Delete Item\")' >นอนยัน</button>";?>
					</form>
			</div>


		</div> <!-- container -->