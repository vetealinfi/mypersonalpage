				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						
						<h1><?php echo $group['Group']['name']; ?></h1>
						<hr />
						
						<div class="row" style="">
							<?php
								$i=0;
								foreach($users as $user){
							?>
							<div class="col-lg-12 col-sm-12 col-md-12" style="padding-bottom:15px;">
								
								<a href="<?php echo $this->Html->url('/academico/'.$user['User']['slug']); ?>" style="font-size: 20px;"><?php echo $user['User']['full_name']; ?></a>
								<?php //echo $user['User']['position']; ?>
								<?php echo $user['User']['grades']; ?>
								
							</div>
							<?php
								}
							?>	
						</div>
						<div class="row" style="">
							<div class="col-lg-12 col-sm-12 col-md-12">
							<?php	
								echo $this->Paginator->numbers();
							?>
							</div>	
						</div>	
						
					</div>
					
					
				</div>
				
	