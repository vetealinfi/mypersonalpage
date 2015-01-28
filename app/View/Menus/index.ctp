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
							<a href="<?php echo $this->Html->url('/Menus/'); ?>">Menus</a>
						</li>
						<li class="active">Menus</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Menus								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Index Menu'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Menus/add/'); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								Agregar
							</a>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<?php
											foreach($menus_listado as $cat_id => $cat_name){
												echo $cat_name;
												echo '<br />';
											}
										?>
										
									</div>
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
												<th>Nombre Menu</th>
												<th>Link</th>
												<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php 
													foreach($menus_listado as $cat_id => $cat_name){ 
												?>
												<tr>
													<td><?php echo h($cat_name); ?>&nbsp;</td>
													<td><?php echo $menu_list[$cat_id]['Menu']['url']; ?>&nbsp;</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('/Menus/edit/'.$cat_id); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>
															<a href="<?php echo $this->Html->url('/Menus/moveup/'.$cat_id.'/1'); ?>" class="tooltip-info" data-rel="tooltip" title="Move Up">
																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-level-up bigger-120"></i>
																</button>
															</a>
															<a href="<?php echo $this->Html->url('/Menus/movedown/'.$cat_id.'/1'); ?>" class="tooltip-info" data-rel="tooltip" title="Move Down">
																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-level-down bigger-120"></i>
																</button>
															</a>
															<form action="<?php echo $this->Html->url('/Menus/delete/'.$cat_id); ?>" name="post_<?php echo $cat_id; ?>" id="post_<?php echo $cat_id; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $cat_id; ?>.submit();} event.returnvalue='false'; return false; ">
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
																		<a href="<?php echo $this->Html->url('/Menus/edit/'.$cat_id); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Menus/delete/'.$cat_id); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
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