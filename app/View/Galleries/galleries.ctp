				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						<h1>Qué estamos haciendo</h1>
						<hr />
						<div class="row">
							
							<div class="col-lg-12 col-sm-12 col-md-12" style="padding-left:2px;margin-bottom:40px;">
								Una muestra de nuestras actividades.
							</div>
						
							
							<div class="col-lg-12 col-sm-12 col-md-12" style="">
								<div class="row">
								<?php
									foreach($galleries as $gallery){
										if(count($gallery['GalleryPhoto'])>0){
								?>
									<div class="col-lg-3 col-md-4 col-xs-6 thumb">
										<a class="thumbnail" href="<?php echo $this->Html->url('/Galleries/gallery/'.$gallery['Gallery']['slug']); ?>">
											<img class="img-responsive" style="width:400px;height:auto;" src="<?php echo $this->Html->url('/img/galleries/'.$gallery['GalleryPhoto'][0]['photo']); ?>" alt="">
										</a>
										<a class="" href="<?php echo $this->Html->url('/Galleries/gallery/'.$gallery['Gallery']['slug']); ?>">
											<h4>
												<?php echo $gallery['Gallery']['name']; ?>
											</h4>
										</a>
									</div>
								<?php
										}
									}
								?>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>