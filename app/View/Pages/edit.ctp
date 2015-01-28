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
							<a href="<?php echo $this->Html->url('/Pages/'); ?>">Paginas</a>
						</li>
						<li class="active"><?php echo __('Editar Pagina'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Paginas								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Agregar Paginas'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Page',array('type' => 'file','id'=>'add-post','class'=>'form-horizontal','role'=>'form')); ?>
									<?php echo $this->Form->hidden('Page.id'); ?>
									<?php echo $this->Form->hidden('Page.menu_id'); ?>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Nombre
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'nombre pagina','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Cuerpo										</label>

										<div class="col-sm-9">
											<?php //echo $this->Form->input('body',array('type'=>'textarea','div'=>false,'label'=>false,'id'=>'cuerpo','data-provide'=>'markdown','data-iconlibrary'=>'fa','rows'=>'10','class'=>'col-xs-10 col-sm-5')); ?>	
											<div id="cuerpo" class="wysiwyg-editor">
											
												<?php
													echo $this->request->data['Page']['body'];
												?>
											</div>
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
			$(document).ready(function(){
				$('#cuerpo').ace_wysiwyg();
				$('#imagen-post').ace_file_input({
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
				$('#add-post').on('submit', function() {
					var hidden_input =
					$('<input type="hidden" name="data[Page][body]" />')
					.appendTo('#add-post');

					var html_content = $('#cuerpo').html();
					hidden_input.val( html_content );
					//put the editor's HTML into hidden_input and it will be sent to server
				});
				
			});
		</script>