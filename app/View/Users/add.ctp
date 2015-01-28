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
							<a href="<?php echo $this->Html->url('/Users/'); ?>">Usuarios</a>
						</li>
						<li class="active"><?php echo __('Agregar Usuario'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Usuarios								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Agregar Usuario'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('User',array('type' => 'file','id'=>'add-user','class'=>'form-horizontal','role'=>'form')); ?>
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Grupo de Usuario
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('group_id',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'group_id','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Nombre Completo
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('full_name',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Nombre Completo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Cargo
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('position',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Nombre Completo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Descripción
										</label>

										<div class="col-sm-9">
											<div id="description" class="wysiwyg-editor"></div>
											<?php //echo $this->Form->input('description',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'description','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Telefono Contacto										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('contact_phone',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'telefono de contacto','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Email Contacto										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('contact_email',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'email de contacto','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Foto
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('photo',array('type'=>'file','div'=>false,'label'=>false,'id'=>'foto-user','placeholder'=>'','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											T&iacute;tulos
										</label>

										<div class="col-sm-9">
											<div id="grades" class="wysiwyg-editor"></div>
											<?php //echo $this->Form->input('grades',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Titulo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Intereses
										</label>

										<div class="col-sm-9">
											<input type="text" name="data[Interest][list]" id="form-field-tags2" value="" />
											<?php //echo $this->Form->input('grades',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'Titulo','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Guardar
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
			$(document).ready(function(){
				$('#description').ace_wysiwyg();
				$('#grades').ace_wysiwyg();
				$('#foto-user').ace_file_input({
					no_file:'Sin Archivo ...',
					btn_choose:'Elegir',
					btn_change:'Cambiar',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				$('#add-user').on('submit', function() {
					var hidden_input =
					$('<input type="hidden" name="data[User][description]" />')
					.appendTo('#add-user');

					var html_content = $('#description').html();
					hidden_input.val( html_content );
					
					var hidden_input2 =
					$('<input type="hidden" name="data[User][grades]" />')
					.appendTo('#add-user');

					var html_content2 = $('#grades').html();
					hidden_input2.val( html_content2 );
					//put the editor's HTML into hidden_input and it will be sent to server
				});
				
				var tag_input = $('#form-field-tags2');
				try{
				   tag_input.tag({
					  placeholder: tag_input.attr('placeholder'),
					  source: [],//static autocomplet array

					  //or fetch data from database, fetch those that match "query"
					  
				   });
				}
				catch(e) {
				   //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
				   tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
				}
			});
		</script>