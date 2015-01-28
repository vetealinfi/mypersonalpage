				<div class="row ultimas-publicaciones" style="">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<h3 class="titulo-ultimas-publicaciones">Publicaciones de <?php
								echo $user['User']['full_name'];
							?></h3>
					</div>
					<div class="col-lg-12 col-sm-12 col-md-12" style="padding-top:30px;">
						<?php
							foreach($publications as $p){
						?>
						<div class="row publicacion">
							<!--
							<div class="col-lg-3 col-sm-3 col-md-3">
								<div class="thumbnail">
									<img src="<?php echo $this->Html->url('/img/users/'.$p['User']['photo']); ?>" style="width:100%;height:auto;" />
								</div>
							</div>
							-->
							<div class="col-lg-12 col-sm-12 col-md-12">
								<?php echo $p['Publication']['description']; ?>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>