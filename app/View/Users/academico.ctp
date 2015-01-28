				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						<h2><?php
								echo $user['User']['full_name'];
							?>
						</h2>
						<hr />
						<h4>
							<?php
								echo $user['User']['grades'];
							?>
						</h4>
						<br />
						<div class="row" style="">
							<div class="col-lg-5 col-sm-5 col-md-5">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 thumbnail">
										<img src="<?php echo $this->Html->url('/img/users/'.$user['User']['photo']); ?>" style="width:100%;height:auto;" />
									</div>
									<div class="col-lg-12 col-sm-12 col-md-12">
										<i class="fa fa-phone"></i> &nbsp;&nbsp;<?php echo $user['User']['contact_phone']; ?>
										<br />
										<i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $user['User']['contact_email']; ?>
									</div>
									<div class="col-lg-12 col-sm-12 col-md-12">
										<?php
											foreach($user['Interest'] as $int){
										?>
										<span class="label label-primary" style="background-color: #116D9F;"><?php echo $int['name']; ?></span>
										<?php
											}
										?>
									</div>
									<div class="col-lg-12 col-sm-12 col-md-12">
										<br />
									</div>
									
									<div class="col-lg-12 col-sm-12 col-md-12">
										<a href="<?php echo $this->Html->url('/publications/publicaciones/'.$user['User']['slug']); ?>">
											<button type="button" class="btn btn-default">Publicaciones</button>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-md-7">
								
								<?php
									echo $user['User']['description'];
								?>
							</div>
						</div>
					</div>
					
					
				</div>
				
	<hr />