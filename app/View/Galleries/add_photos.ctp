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
							<a href="<?php echo $this->Html->url('/Galleries/'); ?>">Galleries</a>
						</li>
						<li class="active"><?php echo __('Add Gallery'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Galleries								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Add Gallery'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Galleries/view_photos/'.$gallery_id); ?>"><button class="btn btn-app btn-warning">
								<i class="ace-icon fa fa-undo bigger-230"></i>
								Volver
							</button>
							</a>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<!-- PAGE CONTENT BEGINS -->
								<div>
								<!--
									<form action="../dummy.html" class="dropzone" id="dropzone">
										<div class="fallback">
											<input name="file" type="file" multiple="" />
										</div>
									</form>
								-->	
								<?php echo $this->Form->create('GalleryPhoto',array('url' => array('controller' => 'galleries', 'action' => 'add_photos',$gallery_id),'type' => 'file','id'=>'dropzone','class'=>'dropzone form-horizontal','role'=>'form')); ?>
										<div class="fallback">
											<input name="file" type="file" multiple="" />
										</div>
								<?php echo $this->Form->end(); ?>	
									
								</div><!-- PAGE CONTENT ENDS -->

									
								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
		<script type="text/javascript">
			jQuery(function($){
			
			Dropzone.autoDiscover = false;
			try {
			  var myDropzone = new Dropzone("#dropzone" , {
			    paramName: "data[GalleryPhoto][photo]", // The name that will be used to transfer the file
			    maxFilesize: 50, // MB
				addRemoveLinks : false,
				dictDefaultMessage :
				'<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Arrastre  sus fotos</span> para subirlas \
				<span class="smaller-80 grey">(or clickee)</span> <br /> \
				<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>',
				dictResponseError: 'Error while uploading file!',
				previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
			  });
			} catch(e) {
			  alert('Dropzone.js does not support older browsers!');
			}
			
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				
				
				
				$('#add-photos').on('submit', function() {
					
				});
				
			});
		</script>