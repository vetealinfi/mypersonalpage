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
							<a href="<?php echo $this->Html->url('/Configurations/'); ?>">Configuration</a>
						</li>
						<li class="active"><?php echo __('Edit Configuration'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Configurations								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Edit Configuration'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Configuration',array('class'=>'form-horizontal','role'=>'form')); ?>
								<?php echo $this->Form->hidden('Configuration.id'); ?>
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Tipo de Configuración
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('Configuration.type',array('type'=>'select','options'=>$config_types,'div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'category_id','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Nombre Descriptivo
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('Configuration.name',array('readonly'=>'readonly','div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'title','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Valor										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('Configuration.value', array('type'=>'textarea','label'=>false, 'div'=>false,'class'=>'form-control')); ?>
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