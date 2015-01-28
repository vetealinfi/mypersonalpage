<style>		


.list-group-event {
    height:auto;
    min-height:220px;
}
	
</style>				
			
				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						
						<h1><?php echo $cat['Category']['name']; ?></h1>
						<hr />
						
						<div class="list-group">
							<?php
								foreach($posts as $post){
									$day_data=explode('-',$post['Post']['publishing_date']);
									$month='';
									if($day_data[1]==1)$month='Enero';
									if($day_data[1]==2)$month='Febrero';
									if($day_data[1]==3)$month='Marzo';
									if($day_data[1]==4)$month='Abril';
									if($day_data[1]==5)$month='Mayo';
									if($day_data[1]==6)$month='Junio';
									if($day_data[1]==7)$month='Julio';
									if($day_data[1]==8)$month='Agosto';
									if($day_data[1]==9)$month='Septiembre';
									if($day_data[1]==10)$month='Octubre';
									if($day_data[1]==11)$month='Noviembre';
									if($day_data[1]==12)$month='Diciembre';
									
							?>
							<a href="<?php echo $this->Html->url('/notice/'.$post['Post']['slug']); ?>" class="list-group-item list-group-event">
								<div class="media col-md-3">
									<h2 class="" style="font-size: 80px;"><?php echo $day_data[2]; ?></h2>
									<h3><?php echo $month; ?></h3>
								</div>
								<div class="col-md-6">
									<h4 class="list-group-item-heading"> <?php echo $post['Post']['title']; ?> </h4>
									<p class="list-group-item-text">
										<?php 
										
											$stringDisplay = substr(strip_tags($post['Post']['body']), 0, 350);
											if (strlen(strip_tags($post['Post']['body'])) > 350){
												echo $stringDisplay .= ' ...';
											}else{
												echo $stringDisplay; 
											}
											
										?>
									</p>
								</div>
								<div class="col-md-3 text-center">
									
									<button type="button" class="btn btn-primary btn-lg btn-block">Ver noticia</button><br />
									
								</div>
							</a>
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