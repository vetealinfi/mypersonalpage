				<div class="row" style="margin-left:0px;padding-left:2px;">
					<h1>Contacto</h1>
				
					<div class="col-md-8">
						<div class="well well-sm">
							<form>
							<?php echo $this->Form->create('Contact', array('url' => array('controller' => 'pages', 'action' => 'contacto'))); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Nombre completo</label>
										<input type="text" class="form-control" name="data[Contact][name]" placeholder="Ingrese nombre" required="required" />
									</div>
									<div class="form-group">
										<label for="email">
											Email</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" class="form-control" name="data[Contact][email]" placeholder="Ingrese email" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="asunto">
											Asunto</label>
										<input type="text" class="form-control" name="data[Contact][subject]" placeholder="Ingrese asunto" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">
											Mensaje</label>
										<textarea name="data[Contact][message]" class="form-control" rows="9" cols="25" required="required"
											placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
										Enviar</button>
								</div>
							</div>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
					<div class="col-md-4">
			
						<legend><span class="glyphicon glyphicon-globe"></span>Información de Contacto</legend>
						<?php
							echo $info['Configuration']['value'];
						?>
					
					</div>
					<div class="col-md-12">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
					</div>
				</div>
				
	