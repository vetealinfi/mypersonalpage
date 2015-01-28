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
							<a href="<?php echo $this->Html->url('/Users/'); ?>">Usuarios</a>
						</li>
						<li class="active">Usuarios</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Usuarios								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Usuarios'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Users/add/'); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								Agregar
							</a>
						</div><!-- /.page-header -->
						<!--
						<div class="row">
							<div class="col-xs-12">
								<iframe src="http://localhost/omega/producto/view_products_category/3/Monitor/2/2" class="col-xs-12" style="height:520px;border:0px;"></iframe>
							</div>
						</div>-->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
												<th>Grupo de Usuario</th>
												<th>Nombre Completo</th>
												<th></th>
												<th>Link</th>
												<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($users as $user){ ?>
												<tr>
													<td>
													<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
													</td>
													<td><?php echo h($user['User']['full_name']); ?>&nbsp;</td>
													<td>
														<?php
															// if($user['User']['group_id']==3){
														?>
														<a href="<?php echo $this->Html->url('/users/academico/'.$user['User']['slug']); ?>" target="_blank">Abrir Perfil</a>&nbsp;
														<?php
															// }
														?>
													</td>
													<td>
														<?php
															// if($user['User']['group_id']==3){
														?>
														<a href="<?php echo $this->Html->url('/publications/index/'.$user['User']['id']); ?>">Publicaciones</a>&nbsp;
														<?php
															// }
														?>
													</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('/users/academico/'.$user['User']['slug']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo $this->Html->url('/Users/edit/'.$user['User']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo $this->Html->url('/Users/delete/'.$user['User']['id']); ?>" name="post_<?php echo $user['User']['id']; ?>" id="post_<?php echo $user['User']['id']; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $user['User']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>
															</a>
															

														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline position-relative">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="<?php echo $this->Html->url('/users/academico/'.$user['User']['slug']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Users/edit/'.$user['User']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Users/delete/'.$user['User']['id']); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<?php } ?>
												
											</tbody>
										</table>
										<div class="row" style="">
											<div class="col-lg-12 col-sm-12 col-md-12">
											<?php	
												echo $this->Paginator->numbers();
											?>
											</div>	
										</div>
									
									</div><!-- /.span -->
								</div><!-- /.row -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->