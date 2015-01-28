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
							<a href="<?php echo $this->Html->url('/Images/'); ?>">Images</a>
						</li>
						<li class="active">Images</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Images								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Index Image'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Images/add/'); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								Agregar
							</a>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
																									<th><?php echo $this->Paginator->sort('post_id'); ?></th>
																									<th><?php echo $this->Paginator->sort('title'); ?></th>
																									<th><?php echo $this->Paginator->sort('name'); ?></th>
																									<th><?php echo $this->Paginator->sort('type'); ?></th>
																									<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($images as $image){ ?>
												<tr>
															<td>
			<?php echo $this->Html->link($image['Post']['title'], array('controller' => 'posts', 'action' => 'view', $image['Post']['id'])); ?>
		</td>
		<td><?php echo h($image['Image']['title']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['name']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['type']); ?>&nbsp;</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('/Images/view/'.$image['Image']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo $this->Html->url('/Images/edit/'.$image['Image']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo $this->Html->url('/Images/delete/'.$image['Image']['id']); ?>" name="post_<?php echo $image['Image']['id']; ?>" id="post_<?php echo $image['Image']['id']; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $image['Image']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
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
																		<a href="<?php echo $this->Html->url('/Images/view/'.$image['Image']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Images/edit/'.$image['Image']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Images/delete/'.$image['Image']['id']); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
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
										<ul class="pagination pull-right no-margin">
											<li class="prev disabled">
												<a href="#">
													<i class="ace-icon fa fa-angle-double-left"></i>
												</a>
											</li>

											<li class="active">
												<a href="#">1</a>
											</li>

											<li>
												<a href="#">2</a>
											</li>

											<li>
												<a href="#">3</a>
											</li>

											<li class="next">
												<a href="#">
													<i class="ace-icon fa fa-angle-double-right"></i>
												</a>
											</li>
										</ul>
									
									</div><!-- /.span -->
								</div><!-- /.row -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->