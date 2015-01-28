<?php 
	$events =$this->requestAction('events/getLastEvent/4');

?>						
						
						
						<div class="row eventos">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<h3 class="titulo-eventos text-center">Eventos</h3>
							</div>
							
							<?php
								foreach($events as $event){
							?>
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="date-event">
									<h5><?php echo $event['Event']['human_date']; ?></h5>
									<h5><b><?php echo $event['Event']['title']; ?></b></h5>
								</div>
								<div class="content-event">
									<a href="<?php echo $this->Html->url('/event/'.$event['Event']['slug']); ?>" class="pull-right" style="color:#ffffff;"> Ir al Evento</a>
								</div>
							</div>
							<?php
								}
							?>
							
							
							
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="content-event pull-right">
									<a href="<?php echo $this->Html->url('/events/events'); ?>" style="color:#ffffff;"><h4>Ver Más Eventos</h4></a>
								</div>
							</div>
							
						</div>
					