
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
				</div>
                <?php } ?>
			</div>


		</div> <!-- container -->