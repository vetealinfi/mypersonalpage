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
						<h4>Configuraciones</h4>
					</div>


	
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
										<th scope="col">Nombre</th>
										<th scope="col">Slug</th>
										<th scope="col">Valor</th>
										<th scope="col"><?php echo __('Acciones'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($configuraciones as $c){ ?>
										<tr>
											<td><?php echo h($c['Configuration']['id']); ?>&nbsp;</td>
											<td><?php echo h($c['Configuration']['name']); ?>&nbsp;</td>
											<td><?php echo h($c['Configuration']['slug']); ?>&nbsp;</td>
											<td>
												<?php 
													if($c['Configuration']['type']!=1)echo $c['Configuration']['value'];
												?>
											</td>
											<td>
												<?php 
													echo $this->Html->link(__('Editar'), array('action' => 'edit_config', $c['Configuration']['id']),array('class'=>'btn'));
													// echo $this->Html->link(__('Borrar'), array('action' => 'delete_config', $c['Configuration']['id']),array('class'=>'btn'));
													
												?>
												
											</td>
										</tr>
									<?php 
										} 
									?>
								</tbody>
							</table>
						</div>
						<div class="col-lg-12">
							<?php echo $this->Paginator->counter(array(
								'format' => __('Pagina {:page} de {:pages}')
							)); ?>				
						</div>
						<div class="col-lg-12">	
							<?php
							echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled','style'=>'margin-right:10px;'));
							echo $this->Paginator->numbers(array('separator' => ' '));
							echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled','style'=>'margin-left:10px;'));
							?>
						</div>	
					</div>
							
				</div>
			</div>
			
		</div>
	</div>
</div> <!-- /container -->