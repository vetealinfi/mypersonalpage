				<div class="row" style="margin-left:0px;padding-left:2px;">
					<div class="col-lg-12 col-sm-12 col-md-12" style="margin-left:0px;padding-left:2px;">
						<h1><?php echo $gallery['Gallery']['name']; ?></h1>
						<hr />
						<div class="row">
							
							<div class="col-lg-12 col-sm-12 col-md-12" style="padding-left:2px;">
								<?php echo $gallery['Gallery']['description']; ?>
								
							</div>
						
							
							<div class="col-lg-12 col-sm-12 col-md-12" style="">
								<div class="row">
								<?php
									foreach($gallery['GalleryPhoto'] as $photo){
								?>
									<div class="col-lg-3 col-md-4 col-xs-6 thumb">
										<a class="thumbnail" href="<?php echo $this->Html->url('/img/galleries/'.$photo['photo']); ?>" data-gallery>
											<img class="img-responsive" style="width:400px;height:auto;" src="<?php echo $this->Html->url('/img/galleries/'.$photo['photo']); ?>" alt="">
										</a>
									</div>
								<?php
									}
								?>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				
				
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery " data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
	