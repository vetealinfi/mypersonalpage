<?php
	$categories = $this->requestAction('categories/getCategoriesSlider/');
	$news = $this->requestAction('categories/getCategoriesSliderNews/');
?>				
				
				
				
				<div class="row" style="">
					<div class="col-lg-8 col-sm-8 col-md-8" style="">
						
						<div id="myCarousel" class="carousel slide row" data-ride="carousel">
							<div class="col-lg-12 col-sm-12 col-md-12" style="">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									
									<?php
										$i=0;
										foreach($categories as $category){
											if($news[$category['Category']['id']]!=null){
									?>
									<div class="item <?php if($i==0){echo 'active';$i=1;} ?>" style="min-height:300px;">
										<img src="<?php echo $this->Html->url('/img/posts/'.$news[$category['Category']['id']][0]['Post']['photo']); ?>" style="width:100%;height:auto;">
										<div class="" style="width:100%;background-color: rgba(51, 51, 51, 0.58);position: absolute;bottom:0px;height:80px;padding-left:10px;padding-right:10px;">
											<a href="<?php echo $this->Html->url('/notice/'.$news[$category['Category']['id']][0]['Post']['slug']); ?>"><h3><?php 
											if(strlen($news[$category['Category']['id']][0]['Post']['title'])>80){
												echo substr($news[$category['Category']['id']][0]['Post']['title'], 0, 80).'...';
											}else{
												echo $news[$category['Category']['id']][0]['Post']['title'];
											}
											?></h3></a>
										</div>
									</div><!-- End Item -->
									<?php
											}
										}
									?>

								</div><!-- End Carousel Inner -->


								<ul class="nav nav-pills nav-justified">
									<?php
										$i=0;
										$active=0;
										foreach($categories as $category){
											if($news[$category['Category']['id']]!=null){
									?>
									<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($active==0){echo 'active';$active=1;} ?>"><a href="#"><?php echo $category['Category']['name']; ?></a></li>
									<?php
											
												$i++;
											}
										}
									?>
								</ul>
							</div>
			
						</div><!-- End Carousel -->
					</div>
					
					<div class="col-lg-4 col-sm-4 col-md-4" style="background-color:#116D9F;">
						<?php echo $this->element('dii_events'); ?>
						
					</div>
		
				</div>
				<div class="row ultimas-publicaciones" style="display:none">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<h3 class="titulo-ultimas-publicaciones">Últimas publicaciones</h3>
					</div>
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="row publicacion">
							<div class="col-lg-3 col-sm-3 col-md-3">
								<div class="thumbnail">
									<img src="<?php echo $this->Html->url('/template/'); ?>imagenes/profesores/andalaft.jpg" />
								</div>
							</div>
							<div class="col-lg-9 col-sm-9 col-md-9">
								Andalaft-Chacur A., Montaz Ali, J. González, (2011), “Real options pricing by the finite element method”, Computers and Mathematics with Applications, Vol. 61, p. 2863-2873.
							</div>
						</div>
						<div class="row publicacion">
							<div class="col-lg-3 col-sm-3 col-md-3">
								<div class="thumbnail">
									<img src="<?php echo $this->Html->url('/template/'); ?>imagenes/profesores/cristian-mardones.jpg" />
								</div>
							</div>
							<div class="col-lg-9 col-sm-9 col-md-9">
								Mardones, C. y J. Saavedra, (2011), "Matriz de Contabilidad Social Extendida Ambientalmente para Análisis Económico de la Región del Bío Bío", Revista de Análisis Económico/Economic Analysis Review, Vol. 26 (1), p. 17-51.
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-md-12">
								<a href="" class=" pull-right" style="color:#116D9F;"><h4>Ver Más Publicaciones</h4></a>
							</div>
						</div>
					</div>
				</div>

				
<script type="text/javascript">
	$(document).ready( function() {
		// $('.menu-click').on('click', function() {
			// $('.menu-item').collapse('hide');
		// });
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	// $('#menuCollapsible').on('show.bs.collapse', function () {menu-click
	// })
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
</script>