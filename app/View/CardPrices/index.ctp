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
							<a href="<?php echo $this->Html->url('//'); ?>">Card Prices</a>
						</li>
						<li class="active">Card Prices</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Card Prices								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Index Card Price'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('//add/'); ?>" class="btn btn-default btn-app btn-xs">
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
																									<th><?php echo $this->Paginator->sort('card_page_id'); ?></th>
																									<th><?php echo $this->Paginator->sort('specific_card_id'); ?></th>
																									<th><?php echo $this->Paginator->sort('nm'); ?></th>
																									<th><?php echo $this->Paginator->sort('ex'); ?></th>
																									<th><?php echo $this->Paginator->sort('v'); ?></th>
																									<th><?php echo $this->Paginator->sort('vg'); ?></th>
																									<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($cardPrices as $cardPrice){ ?>
												<tr>
															<td>
			<?php echo $this->Html->link($cardPrice['CardPage']['name'], array('controller' => 'card_pages', 'action' => 'view', $cardPrice['CardPage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cardPrice['SpecificCard']['card_id'], array('controller' => 'specific_cards', 'action' => 'view', $cardPrice['SpecificCard']['id'])); ?>
		</td>
		<td><?php echo h($cardPrice['CardPrice']['nm']); ?>&nbsp;</td>
		<td><?php echo h($cardPrice['CardPrice']['ex']); ?>&nbsp;</td>
		<td><?php echo h($cardPrice['CardPrice']['v']); ?>&nbsp;</td>
		<td><?php echo h($cardPrice['CardPrice']['vg']); ?>&nbsp;</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('//view/'.$cardPrice['CardPrice']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo $this->Html->url('//edit/'.$cardPrice['CardPrice']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo $this->Html->url('//delete/'.$cardPrice['CardPrice']['id']); ?>" name="post_<?php echo $cardPrice['CardPrice']['id']; ?>" id="post_<?php echo $cardPrice['CardPrice']['id']; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $cardPrice['CardPrice']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
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
																		<a href="<?php echo $this->Html->url('//view/'.$cardPrice['CardPrice']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('//edit/'.$cardPrice['CardPrice']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('//delete/'.$cardPrice['CardPrice']['id']); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
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