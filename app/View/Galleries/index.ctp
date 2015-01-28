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
						<li class="active">Posts</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Galleries								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Galleries'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Galleries/add/'); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								Add New Gallery
							</a>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<div class="col-xs-12" id="jaumach" ></div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
												<th><?php echo $this->Paginator->sort('name'); ?></th>
												<th>Description</th>
												<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($galleries as $gallery){ ?>
												<tr>
													<td><?php echo h($gallery['Gallery']['name']); ?>&nbsp;</td>
													<td>
														<?php echo $gallery['Gallery']['description']; ?>
													</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('/Galleries/view_photos/'.$gallery['Gallery']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo $this->Html->url('/Galleries/edit/'.$gallery['Gallery']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo $this->Html->url('/Galleries/delete/'.$gallery['Gallery']['id']); ?>" name="post_<?php echo $gallery['Gallery']['id']; ?>" id="post_<?php echo $gallery['Gallery']['id']; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $gallery['Gallery']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
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
																		<a href="<?php echo $this->Html->url('/Galleries/view_photos/'.$gallery['Gallery']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Galleries/edit/'.$gallery['Gallery']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Galleries/delete/'.$gallery['Gallery']['id']); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
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
			
				
				
				