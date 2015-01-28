				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo $this->Html->url('/'); ?>">Principal</a>
						</li>

						<li>
							<a href="<?php echo $this->Html->url('/Events/'); ?>">Events</a>
						</li>
						<li class="active"><?php echo __('Edit Event'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Events								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Edit Event'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Event',array('class'=>'form-horizontal','id'=>'add-event','role'=>'form')); ?>
									<?php echo $this->Form->hidden('Event.id'); ?>
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Nombre del Evento
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('title',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Titulo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Fecha Descriptiva
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('human_date',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Fecha Descriptiva','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Url
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('url',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Url','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									
									
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Lugar
										</label>

										<div class="col-sm-9">
											<div id="event-place" class="wysiwyg-editor">
												<?php
													if(isset($this->request->data['Event']['place'])){
														echo $this->request->data['Event']['place'];
													}
												?>
											</div>
											<?php //echo $this->Form->input('cuerpo',array('div'=>false,'label'=>false,'id'=>'event-body','placeholder'=>'cuerpo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Peque&ntilde;a Descripción
										</label>

										<div class="col-sm-9">
											<div id="event-description" class="wysiwyg-editor">
												<?php
													if(isset($this->request->data['Event']['description'])){
														echo $this->request->data['Event']['description'];
													}
												?>
											</div>
											<?php //echo $this->Form->input('descripcion',array('div'=>false,'label'=>false,'id'=>'event-description','placeholder'=>'descripcion','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Cuerpo
										</label>

										<div class="col-sm-9">
											<div id="event-body" class="wysiwyg-editor">
												<?php
													if(isset($this->request->data['Event']['body'])){
														echo $this->request->data['Event']['body'];
													}
												?>
											</div>
											<?php //echo $this->Form->input('cuerpo',array('div'=>false,'label'=>false,'id'=>'event-body','placeholder'=>'cuerpo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Fecha Evento
										</label>

										<div class="col-lg-5">
											<input class="form-control" type="text" name="data[Event][dates]" value="<?php if(isset($this->request->data['Event']['dates']))echo $this->request->data['Event']['dates']; ?>" id="day-range" />
											<?php //echo $this->Form->input('fecha_inicial',array('type'=>'text','div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'fecha_inicial','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Hora de Inicio
										</label>

										<div class="col-lg-5">
											<input id="initial_hour" name="data[Event][initial_hour]" value="<?php if(isset($this->request->data['Event']['initial_hour']))echo $this->request->data['Event']['initial_hour']; ?>" type="text" class="form-control col-lg-5" />
												
											<?php //echo $this->Form->input('fecha_final',array('type'=>'text','div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'fecha_final','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Hora de Termino
										</label>

										<div class="col-lg-5">
											<input id="final_hour" name="data[Event][final_hour]" value="<?php if(isset($this->request->data['Event']['final_hour']))echo $this->request->data['Event']['final_hour']; ?>" type="text" class="form-control col-lg-5" />
												
											<?php //echo $this->Form->input('fecha_final',array('type'=>'text','div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'fecha_final','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
																	<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									
								<?php echo $this->Form->end(); ?>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->

				
<script type="text/javascript">

	$( document ).ready(function() {
		$('#event-description').ace_wysiwyg();
		$('#event-body').ace_wysiwyg();
		$('#event-place').ace_wysiwyg();
		//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
		$('#day-range').daterangepicker({
			'applyClass' : 'btn-sm btn-success',
			'cancelClass' : 'btn-sm btn-default',
			locale: {
				applyLabel: 'Seleccionar',
				cancelLabel: 'Cancelar',
			}
		})
		.prev().on(ace.click_event, function(){
			$(this).next().focus();
		});
		$('#initial_hour').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
		$('#final_hour').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
		$('#add-event').on('submit', function() {
			var hidden_input =
			$('<input type="hidden" name="data[Event][body]" />')
			.appendTo('#add-event');

			var html_content = $('#event-body').html();
			hidden_input.val( html_content );
			
			var hidden_input2 =
			$('<input type="hidden" name="data[Event][description]" />')
			.appendTo('#add-event');

			var html_content2 = $('#event-description').html();
			hidden_input2.val( html_content2 );
			
			var hidden_input3 =
			$('<input type="hidden" name="data[Event][place]" />')
			.appendTo('#add-event');

			var html_content3 = $('#event-place').html();
			hidden_input3.val( html_content3 );
		});

	});
</script>