<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Departamento de Ingeniería Industrial - Universidad de Concepción</title>

    
	<style type="text/css">
		
	</style>
	<?php echo $this->element('dii_css'); ?>
	<?php echo $this->element('dii_js'); ?>
	
  </head>
<body>
	<div class="container">
		<?php echo $this->element('dii_navbar'); ?>
		<div class="row" style="min-height:370px;">
			<div class="col-lg-3 col-sm-3 col-md-3" style="margin-right:0px;">
				<?php echo $this->element('dii_sidebar'); ?>
			</div>
			<div class="col-lg-9 col-sm-9 col-md-9" style="margin-left:0px;padding-left:2px;">
				<?php echo $this->fetch('content'); ?>
			</div>
			
		</div>
		
	
		<div class="row" style="margin-top:50px;">
			<?php echo $this->element('dii_footer'); ?>
		</div>
	</div>


</body>
</html>
