				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						<h1><?php echo $event['Event']['title']; ?></h1>
						<hr />
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-md-12 thumbnail" style="padding-left:2px;">
								<?php echo $event['Event']['description']; ?>
							
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12 thumbnail" style="padding-left:2px;">
								<b>Fecha</b>: <?php echo $event['Event']['human_date']; ?>
							</div>
							<?php
								if($event['Event']['url']!=null){
							?>
							<div class="col-lg-12 col-sm-12 col-md-12 thumbnail" style="padding-left:2px;">
								<b>Sitio Web</b>: <a href="<?php echo $event['Event']['url']; ?>"><?php echo $event['Event']['url']; ?></a>
							</div>
							<?php
								}
							?>
							<?php
								if($event['Event']['place']!=null){
							?>
							<div class="col-lg-12 col-sm-12 col-md-12 thumbnail" style="padding-left:2px;">
								<b>Lugar</b>: <?php echo $event['Event']['place']; ?>
							</div>
							<?php
								}
							?>
							<div class="col-lg-12 col-sm-12 col-md-12" style="">
								<?php echo $event['Event']['body']; ?>
							
							</div>
						</div>
					</div>
					
					
				</div>
				
	