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
							<a href="<?php echo $this->Html->url('/Configurations/'); ?>">Configurations</a>
						</li>
						<li class="active">Configurations</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Configurations								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Configurations'); ?>								</small>
							</h1>
							
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
												<th>Valor</th>
												<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($configurations as $configuration){ ?>
												<tr>
													<td><?php echo h($configuration['Configuration']['name']); ?>&nbsp;</td>
													
													<td>
														<?php 
															if($configuration['Configuration']['type']!=1)echo $configuration['Configuration']['value'];
														?>
													</td>
													
													<td>
														<div class="hidden-sm hidden-xs btn-group">
														

															<a href="<?php echo $this->Html->url('/Configurations/edit/'.$configuration['Configuration']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
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
																		<a href="<?php echo $this->Html->url('/Configurations/edit/'.$configuration['Configuration']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
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
										<div class="col-lg-12">	
											<?php
											echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled','style'=>'margin-right:10px;'));
											echo $this->Paginator->numbers(array('separator' => ' '));
											echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled','style'=>'margin-left:10px;'));
											?>
										</div>
									
									</div><!-- /.span -->
								</div><!-- /.row -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			
				
				
				