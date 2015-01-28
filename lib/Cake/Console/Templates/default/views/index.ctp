				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo "<?php echo \$this->Html->url('/'); ?>"; ?>">Principal</a>
						</li>

						<li>
							<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/'); ?>"; ?>"><?php echo $pluralHumanName; ?></a>
						</li>
						<li class="active"><?php echo $pluralHumanName; ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								<?php echo $pluralHumanName; ?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?>
								</small>
							</h1>
							<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/add/'); ?>"; ?>" class="btn btn-default btn-app btn-xs">
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
												<?php 
													foreach ($fields as $field){ 
														if($field!='created' && $field!='modified' && $field!='id'){
												?>
													<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
												<?php 
														}
													} 
												?>
													<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
											</thead>

											<tbody>
												<?php
													echo "<?php foreach (\${$pluralVar} as \${$singularVar}){ ?>\n";
												?>
												<tr>
													<?php
														foreach ($fields as $field) {
															if($field!='created' && $field!='modified' && $field!='id'){
																$isKey = false;
																if (!empty($associations['belongsTo'])) {
																	foreach ($associations['belongsTo'] as $alias => $details) {
																		if ($field === $details['foreignKey']) {
																			$isKey = true;
																			echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
																			break;
																		}
																	}
																}
																if ($isKey !== true) {
																	echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
																}
															}
														}
													?>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/view/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/edit/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/delete/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" name="post_<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?>"; ?>" id="post_<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?>"; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?>"; ?>.submit();} event.returnvalue='false'; return false; ">
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
																		<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/view/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/edit/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/delete/'.\${$singularVar}['{$modelClass}']['{$primaryKey}']); ?>"; ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
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
												<?php
													echo "<?php } ?>\n";
												?>
												
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