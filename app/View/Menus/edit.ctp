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
							<a href="<?php echo $this->Html->url('/Menus/'); ?>">Categories</a>
						</li>
						<li class="active"><?php echo __('Edit Menu'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Menus								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Edit Menu'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Menu',array('class'=>'form-horizontal','role'=>'form')); ?>
									
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											id
										</label>

										<div class="col-sm-9">
											<?php echo $this->Form->input('id',array('div'=>false,'label'=>false,'readonly'=>'readonly','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Categoría Padre										</label>

										<div class="col-sm-9">
											<?php 
												// echo $this->Form->input('parent_id',array('options'=>$categorias,'div'=>false,'label'=>false,'id'=>'form-field-1','class'=>'col-xs-10 col-sm-5')); 
											?>	
											<?php 
												echo $this->Form->input('parent_id',array('options'=>$menus,'empty'=>'Principal','div'=>false,'label'=>false,'id'=>'form-field-1','class'=>'col-xs-10 col-sm-5')); 
											?>
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Url Categoría
										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('url',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'name','class'=>'col-xs-10 col-sm-5')); ?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
									
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											Nombre Categoría
										</label>

										<div class="col-sm-9">
								<?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'name','class'=>'col-xs-10 col-sm-5')); ?>	
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