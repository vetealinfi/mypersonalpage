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
						<li class="active"><?php echo __('Add Post'); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Posts								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Add Post'); ?>								</small>
							</h1>
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
								<?php echo $this->Form->create('Post',array('url' => array('controller' => 'posts', 'action' => 'dropzone'),'type' => 'file','id'=>'dropzone','class'=>'dropzone form-horizontal','role'=>'form')); ?>
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
			    paramName: "data[Gallery][photo]", // The name that will be used to transfer the file
			    maxFilesize: 0.5, // MB
			
				addRemoveLinks : true,
				dictDefaultMessage :
				'<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload \
				<span class="smaller-80 grey">(or click)</span> <br /> \
				<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>'
			,
				dictResponseError: 'Error while uploading file!',
				
				//change the previewTemplate to use Bootstrap progress bars
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