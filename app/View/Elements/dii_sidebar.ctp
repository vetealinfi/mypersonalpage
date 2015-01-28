<?php
	
	$menu_list =$this->requestAction('menus/getMenuWithChildrens/2');
	$categories = $this->requestAction('categories/getCategoriesMenu/');
	// debug($menu_list);
?>				
				
				
				
				
				<div class="col-lg-12 col-sm-12 col-md-12" style="margin-right:0px;">
					<a href="<?php echo $this->Html->url('/'); ?>" style="background-color:#ffffff;"><img src="<?php echo $this->Html->url('/template/'); ?>imagenes/logo_chico.png" style="width:100%;height:auto;" /></a>
				</div>
				<?php
					// debug($this->request->params['controller']);
					// if()
				?>
				<div class="col-lg-12 col-sm-12 col-md-12 list-group panel" style="margin-right:0px;">
					<div class="panel-group" id="accordion">
						<?php
							$i=1;
							// debug($menu_list);	
							foreach($menu_list['Level1'] as $menu){
								// debug($menu);
						?>
						<div class="panel panel-default" style="margin-top: 0px;border:0px;border-radius: 0px;margin-right:0px;">
							<?php
								if($menu['Menu']['name']=='Noticias'){
							?>
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" class="list-group-item list-group-item-success" style="background-color:#116D9F;color:white;">
								<?php echo $menu['Menu']['name']; ?><i class="fa fa-caret-down pull-right" style="margin-left:5px;"></i>
							</a>
							<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($menu_in==1)echo 'in'; ?>">
								<?php
									foreach($categories as $category){
								?>
								<a href="<?php echo $this->Html->url('/notices/'.$category['Category']['slug']); ?>" class="list-group-item">
									<?php echo $category['Category']['name']; ?>
								</a>
								<?php
									}
								?>
							</div>
							<?php
								}else{
									if($menu_list['Level2'][$menu['Menu']['id']] != array()){
										$menu_in=0;
										foreach($menu_list['Level2'][$menu['Menu']['id']] as $subMenu){
											if(isset($slug) && $subMenu['Menu']['url']=='/dii/'.$slug)$menu_in=1;
											if(isset($pagina_actual) && $subMenu['Menu']['url']==$pagina_actual)$menu_in=1;
										}
							?>
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" class="list-group-item list-group-item-success" style="background-color:#116D9F;color:white;">
								<?php echo $menu['Menu']['name']; ?><i class="fa fa-caret-down pull-right" style="margin-left:5px;"></i>
							</a>
							<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($menu_in==1)echo 'in'; ?>">
								<?php
									foreach($menu_list['Level2'][$menu['Menu']['id']] as $subMenu){
								?>
								<a href="<?php echo $this->Html->url($subMenu['Menu']['url']); ?>" class="list-group-item">
									<?php echo $subMenu['Menu']['name']; ?>
								</a>
								<?php
									}
								?>
							</div>
							<?php
									}else{
							?>
							<div class="panel panel-default" style="margin-top: 0px;border:0px;border-radius: 0px;">

							<a href="<?php echo $this->Html->url($menu['Menu']['url']); ?>" class="list-group-item list-group-item-success" style="background-color:#116D9F;color:white;border-bottom:0px;">
								<?php echo $menu['Menu']['name']; ?>
							</a>

							</div>
							<?php
									}
								}
							?>
						</div>
						<?php
								$i++;
							}
						?>
						<!--
						<div class="panel panel-default" style="margin-top: 0px;border:0px;border-radius: 0px;">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="list-group-item list-group-item-success" style="background-color:#116D9F;color:white;">
						  Ingeniería Civil Industrial<i class="fa fa-caret-down pull-right" style="margin-left:5px;"></i>
						</a>
						<div id="collapseTwo" class="panel-collapse collapse">
						 
							<a href="<?php echo $this->Html->url('/perfil-ingeniero'); ?>" class="list-group-item">General</a>
							<a href="<?php echo $this->Html->url('/malla-curricular'); ?>" class="list-group-item">Malla Curricular</a>
							<a href="<?php echo $this->Html->url('/admision-y-becas'); ?>" class="list-group-item">Admisión y Becas</a>
							<a href="<?php echo $this->Html->url('/estudiantes'); ?>" class="list-group-item">Estudiantes</a>
							<a href="<?php echo $this->Html->url('/alumni'); ?>" class="list-group-item">Alumni</a>
							<a href="<?php echo $this->Html->url('/convenios'); ?>" class="list-group-item">Convenios</a>
						
						</div>
						</div>-->
					
					</div>
					
				</div>
				