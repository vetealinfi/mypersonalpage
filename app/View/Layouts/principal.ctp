<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<?php echo $this->element('admin_css'); ?>
		
	</head>
	<body class="no-skin">
	
		<div class="" style="display:none;">
		<?php echo $this->Session->flash(); ?>
		</div>
		
		<?php echo utf8_encode($this->element('admin_navbar')); ?>
		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			
			<?php echo utf8_encode($this->element('admin_sidebar')); ?>
			
			<div class="main-content">
			
				<?php echo $this->fetch('content'); ?>
			
			</div><!-- /.main-content -->
			
			<?php echo utf8_encode($this->element('admin_footer')); ?>
			
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
	
	
	
		<?php echo $this->element('admin_js'); ?>
	</body>
</html>
