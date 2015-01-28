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
							<a href="<?php echo $this->Html->url('/Posts/'); ?>">Posts</a>
						</li>
						<li class="active"><?php echo __('Edit Post'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Posts								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Edit Post'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Post',array('type' => 'file','id'=>'add-post','class'=>'form-horizontal','role'=>'form')); ?>
								<?php echo $this->Form->hidden('Post.id'); ?>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Titulo
										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('title',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'title','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Fecha de Publicación										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('publishing_date',array('type'=>'text','div'=>false,'label'=>false,'id'=>'publishing-datepicker','class'=>'form-control date-picker col-xs-10 col-sm-5')); ?>	
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
													if(isset($this->request->data['Post']['body'])){
														echo $this->request->data['Post']['body'];
													}
												?>
											</div>
										</div>
									</div>
									
									
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Imagen Principal										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('photo',array('type'=>'file','multiple'=>'multiple','div'=>false,'label'=>false,'id'=>'imagen-post','placeholder'=>'main_img','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
								
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Categoría										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('category_id',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'category_id','class'=>'col-xs-10 col-sm-5')); ?>	
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
					droppable:true,
					onchange:null,
					thumbnail:true //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				$('#add-post').on('submit', function() {
					var hidden_input =
					$('<input type="hidden" name="data[Post][body]" />')
					.appendTo('#add-post');

					var html_content = $('#cuerpo').html();
					hidden_input.val( html_content );
					//put the editor's HTML into hidden_input and it will be sent to server
				});
				
			});
		</script>