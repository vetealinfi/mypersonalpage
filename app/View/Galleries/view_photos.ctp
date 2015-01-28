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
							<a href="<?php echo $this->Html->url('/galleries/'); ?>">Galleries</a>
						</li>
						<li class="active"><?php echo __('Add Gallery'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Galleries
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('View Photos'); ?>
								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Galleries/add_photos/'.$gallery_id); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								+ Photos
							</a>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12 col-sm-12">
										<!-- #section:custom/widget-box -->
										<div class="widget-box">
											<div class="widget-header">
												<h5 class="widget-title"><?php echo $gallery['Gallery']['name']; ?></h5>

												<!-- #section:custom/widget-box.toolbar -->
												<div class="widget-toolbar">
													

													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-pencil"></i>
													</a>
													<form action="<?php echo $this->Html->url('/Galleries/delete/'.$gallery['Gallery']['id']); ?>" name="post_<?php echo $gallery['Gallery']['id']; ?>" id="post_<?php echo $gallery['Gallery']['id']; ?>" style="display:none;" method="post">
														<input type="hidden" name="_method" value="POST">
													</form>
													<a href="" data-action="close"  onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $gallery['Gallery']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
														<i class="ace-icon fa fa-times"></i>
													</a>
												</div>

												<!-- /section:custom/widget-box.toolbar -->
											</div>

											<div class="widget-body">
												<div class="widget-main">
													
													<p class="alert alert-success">
														<?php
															echo $gallery['Gallery']['description'];
														?>
													</p>
												</div>
											</div>
										</div>

										<!-- /section:custom/widget-box -->
									</div>
							<div class="col-xs-12">
								<div>
								  <ul class="ace-thumbnails clearfix">
									<!-- #section:pages/gallery -->
									<?php
										foreach($gallery_photos as $gallery_photo){
									?>
									<li>
									<div>
									  <img width="150" height="150" alt="150x150" src="<?php echo $this->Html->url('/img/galleries/'.$gallery_photo['GalleryPhoto']['photo']); ?>" />
									  <div class="text">
									  <div class="inner">
										<?php
											if($gallery_photo['GalleryPhoto']['title']!=null){
										?>
										<span><?php echo $gallery_photo['GalleryPhoto']['title']; ?></span>
										<?php
											}
										?>
										<br />
										<a href="<?php echo $this->Html->url('/img/galleries/'.$gallery_photo['GalleryPhoto']['photo']); ?>" data-rel="colorbox"><i class="ace-icon fa fa-search-plus"></i></a>
										<a href="#"><i class="ace-icon fa fa-pencil"></i></i></a>
										<form action="<?php echo $this->Html->url('/galleries/delete_photo/'.$gallery_photo['GalleryPhoto']['id']); ?>" name="gallery_<?php echo $gallery_photo['GalleryPhoto']['id']; ?>" id="gallery_<?php echo $gallery_photo['GalleryPhoto']['id']; ?>" style="display:none;" method="post">
											<input type="hidden" name="_method" value="POST">
										</form>
										<a href="#" onclick="if(confirm('Estas seguro?')){ document.gallery_<?php echo $gallery_photo['GalleryPhoto']['id']; ?>.submit();} event.returnvalue='false'; return false; "><i class="ace-icon fa fa-times red"></i></a>
									  </div>
									  </div>
									</div>
									</li>
									<?php
										}
									?>
									
									</ul>
								</div>
								
									
								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->

		<script type="text/javascript">
			$(document).ready(function(){
				var colorbox_params = {
						  rel: 'colorbox',
				   reposition: true,
				  scalePhotos: true,
					scrolling: false,
					 previous: '<i class="ace-icon fa fa-arrow-left"></i>',
						 next: '<i class="ace-icon fa fa-arrow-right"></i>',
						close: '&times;',
					  current: '{current} of {total}',
					 maxWidth: '100%',
					maxHeight: '100%',
				   onComplete: function(){
					 $.colorbox.resize();
				   }
				}
				 
				$('[data-rel="colorbox"]').colorbox(colorbox_params);
				$('#cboxLoadingGraphic').append("<i class='ace-icon fa fa-spinner orange'></i>");

				
			});
		</script>