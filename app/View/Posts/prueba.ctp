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
							<a href="<?php echo $this->Html->url('/Posts/prueba'); ?>">Posts</a>
						</li>
						<li class="active"><?php echo __('Prueba'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Prueba								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Prueba'); ?>								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo $this->Form->create('Post',array('action'=>'prueba','type' => 'file','id'=>'add-post','class'=>'form-horizontal','role'=>'form')); ?>
									
									
									<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Typeahead.js</label>

										<div class="col-sm-9">
											<!-- #section:plugins/bootstrap.typeahead-js -->
											<div class="pos-rel">
												<!--<input class="typeahead scrollable" type="text" placeholder="States of USA" />-->
												<input type="text" name="tags" id="form-field-tags2" value="mytag1,mytag2" />
											</div>

											<!-- /section:plugins/bootstrap.typeahead-js -->
										</div>
									<div class="space-4"></div>
									<div class="space-4"></div>
									<div class="space-4"></div>
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
				var tag_input = $('#form-field-tags2');
				try{
				   tag_input.tag({
					  placeholder: tag_input.attr('placeholder'),
					  source: ['tag 1', 'tag 2'],//static autocomplet array

					  //or fetch data from database, fetch those that match "query"
					  
				   });
				}
				catch(e) {
				   //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
				   tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
				}
				
			});
		</script>