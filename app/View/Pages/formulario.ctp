				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">Home</a>
						</li>

						<li>
							<a href="#">Forms</a>
						</li>
						<li class="active">Form Elements</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Common form elements and layouts
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
										</div>
									</div>

									<!-- /section:elements.form -->
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

										<div class="col-sm-9">
											<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
													<input class="ace" type="checkbox" id="id-disable-check" />
													<span class="lbl"> Disable it!</span>
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

										<div class="col-sm-9">
											<!-- #section:elements.form.input-icon -->
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" />
												<i class="ace-icon fa fa-leaf blue"></i>
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2" />
												<i class="ace-icon fa fa-leaf green"></i>
											</span>

											<!-- /section:elements.form.input-icon -->
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Input con tooltip</label>

										<div class="col-sm-9">
											<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>

									<div class="space-4"></div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Select con busqueda</label>

										<div class="col-sm-5">
											
												
												<select class="chosen-select" id="form-field-select-3" data-placeholder="Choose a State...">
													<option value="">  </option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													
												</select>
											
										</div>
									</div>

									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Textareas</label>

										<div class="col-sm-5">
											<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
											<textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
										</div>
									</div>
									<div class="space-4"></div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Input File</label>

										<div class="col-sm-5">
											<input type="file" id="id-input-file-2" />
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Input File Multiple</label>

										<div class="col-sm-5">
											<input multiple="" type="file" id="id-input-file-3" />
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Input File Multiple</label>

										<div class="col-sm-5">
											<div class="input-group">
												<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Rango 2 fechas</label>

										<div class="col-sm-5">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>

												<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
											</div>
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Hora</label>

										<div class="col-sm-5">
											<!-- #section:plugins/date-time.timepicker -->
											<div class="input-group bootstrap-timepicker">
												<input id="timepicker1" type="text" class="form-control" />
												<span class="input-group-addon">
													<i class="fa fa-clock-o bigger-110"></i>
												</span>
											</div>

											<!-- /section:plugins/date-time.timepicker -->
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Input File Multiple</label>

										<div class="col-sm-5">
											<!-- #section:plugins/date-time.datetimepicker -->
											<div class="input-group">
												<input id="date-timepicker1" type="text" class="form-control" />
												<span class="input-group-addon">
													<i class="fa fa-clock-o bigger-110"></i>
												</span>
											</div>

											<!-- /section:plugins/date-time.datetimepicker -->
										</div>
									</div>
									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									
								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->