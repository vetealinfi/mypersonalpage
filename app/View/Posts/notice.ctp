				<?php
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
				
				
				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						<h1><?php echo $post['Post']['title']; ?></h1>
						<hr />
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-md-12 thumbnail" style="padding-left:2px;">
								<img src="<?php echo $this->Html->url('/img/posts/'.$post['Post']['photo']); ?>" style="min-height:300px;max-height:500px;width:auto;">
								
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12" style="padding-left:2px;">
								<b>Posteado en</b>: <?php echo $post['Category']['name']; ?><br />
								<b>Publicado el</b>: <?php echo $day_data[2].' de '.$month.' de '.$day_data[0]; ?>
								
							</div>
						
							
							<div class="col-lg-12 col-sm-12 col-md-12" style="">
								<?php echo $post['Post']['body']; ?>
							
							</div>
						</div>
					</div>
					
					
				</div>
				
	