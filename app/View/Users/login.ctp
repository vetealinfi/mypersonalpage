						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red"></span>
									<span class="white" id="id-text2">Administrador</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Udec</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Ingrese sus datos.
											</h4>

											<div class="space-6"></div>

											
											<?php 
												echo $this->Form->create('User',array('action' => 'login')); 
											?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															
															<?php echo $this->Form->input('username',array('div'=>false,'label'=>false,'placeholder'=>'Username','class'=>'form-control')); ?>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														
															<?php echo $this->Form->input('password',array('div'=>false,'label'=>false,'placeholder'=>'Password','class'=>'form-control')); ?>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Entrar</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											<?php 
												echo $this->Form->end(); 
											?>

											
										</div><!-- /.widget-main -->
										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

							
						</div>
					