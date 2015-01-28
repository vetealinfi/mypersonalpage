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
							<a href="<?php echo $this->Html->url('/Publications/'); ?>">Publications</a>
						</li>
						<li class="active"><?php echo __('Add Publication'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Publications								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Add Publication'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Publication',array('url' => array('controller' => 'publications', 'action' => 'edit',$this->request->data['Publication']['id']),'class'=>'form-horizontal','id'=>'add-publication','role'=>'form')); ?>
								<?php echo $this->Form->hidden('Publication.id'); ?>	
								<?php echo $this->Form->hidden('Publication.user_id'); ?>	
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Titulo
										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('Publication.title',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'title','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Publicación
										</label>

										<div class="col-sm-9">
											<div id="cuerpo" class="wysiwyg-editor">
											<?php
													if(isset($this->request->data['Publication']['description'])){
														echo $this->request->data['Publication']['description'];
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
											Fecha de Publicación										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('Publication.publishing_date2',array('type'=>'text','div'=>false,'label'=>false,'id'=>'publishing-datepicker','class'=>'form-control date-picker col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Url										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('Publication.url',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'url','class'=>'col-xs-10 col-sm-5')); ?>	
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
				$('#cuerpo').ace_wysiwyg();
				$('#add-publication').on('submit', function() {
					var hidden_input =
					$('<input type="hidden" name="data[Publication][description]" />')
					.appendTo('#add-publication');

					var html_content = $('#cuerpo').html();
					hidden_input.val( html_content );
					//put the editor's HTML into hidden_input and it will be sent to server
				});
				
			});
		</script>