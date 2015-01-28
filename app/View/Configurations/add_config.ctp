
<?php 
	$jaumachHelper = $this->Helpers->load('Jaumach');
?>

<div class="container">
<div class="row">
	
	<div class="col-lg-3 col-md-3 clearfix visible-lg visible-md">
	  <?php echo $this->element('menu_usuario');?>                       
	</div>
	
	<div class="col-lg-9 col-md-9">
		<div class="row">
			<div class="col-lg-12">
				<div class="thumbnail caja panel" style="padding:30px;">
					<!-- Login Normal -->
					
					<div class="panel-heading">
						<h4>Agregar Configuracion</h4>
					</div>
					<div class="panel-body">
						<?php echo $this->Form->create('Configuration', array('url' => array('controller' => 'configurations', 'action' => 'add_config'),'type' => 'file', 'id'=>'editProfileForm', 'class'=>'form-horizontal')); ?>
						<div class="form-group por-filtrado">
							<label for="inputNombre" class="col-sm-2 control-label">Tipo de Configuracion</label>
							<div class="col-sm-10">
								<?php 
									echo $this->Form->input('Configuration.type', array('type'=>'select','options'=>$config_types,'label'=>false, 'div'=>false,'class'=>'form-control tipo-slug')); 
								?>
							</div>
						</div>
						<div class="form-group por-filtrado">
							<label for="inputNombre" class="col-sm-2 control-label">Nombre Descriptivo</label>
							<div class="col-sm-10">
								<?php echo $this->Form->input('Configuration.name', array('type'=>'text','label'=>false, 'div'=>false,'class'=>'form-control')); ?>
							</div>
						</div>
						<div class="form-group por-filtrado">
							<label for="inputNombre" class="col-sm-2 control-label">Slug</label>
							<div class="col-sm-10">
								<?php echo $this->Form->input('Configuration.slug', array('type'=>'text','label'=>false, 'div'=>false,'class'=>'form-control')); ?>
							</div>
						</div>
						

						<div class="form-group por-filtrado filtrado4" style="">
							<label for="inputNombre" class="col-sm-2 control-label">Valor</label>
							<div class="col-sm-10">
								<?php echo $this->Form->input('Configuration.value', array('type'=>'textarea','label'=>false, 'div'=>false,'class'=>'form-control')); ?>
							</div>
						</div>


						<div class="um-button-row">
							<?php echo $this->Form->Submit('Guardar Configuracion', array('class'=>'btn btn-primary', 'id'=>'editProfileSubmitBtn')); ?>
						</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div> <!-- /container -->







