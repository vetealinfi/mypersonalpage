<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/jquery.gritter.css" />

		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo $this->Html->url('/template_admin/assets/'); ?>css/ace.onpage-help.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo $this->Html->url('/template_admin/assets/'); ?>js/html5shiv.js"></script>
		<script src="<?php echo $this->Html->url('/template_admin/assets/'); ?>js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body class="login-layout light-login">
		<div class="" style="display:none;">
		<?php echo $this->Session->flash(); ?>
		</div>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<?php echo $this->fetch('content'); ?>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo $this->Html->url('/template_admin/assets/'); ?>js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo $this->Html->url('/template_admin/assets/'); ?>js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo $this->Html->url('/template_admin/assets/'); ?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		
		<!-- inline scripts related to this page -->
		<!--
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			
		</script>
		-->
	<script src='<?php echo $this->Html->url('/template_admin/assets/'); ?>js/jquery.min.js'></script>
	<script src="<?php echo $this->Html->url('/template_admin/assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $this->Html->url('/template_admin/assets/'); ?>js/jquery.gritter.min.js"></script>
	<script src="<?php echo $this->Html->url('/'); ?>js/config.js"></script>
	</body>
</html>
