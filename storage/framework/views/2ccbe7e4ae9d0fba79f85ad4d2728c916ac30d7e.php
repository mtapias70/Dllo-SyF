<!DOCTYPE html>
<html>
<head>
	<title>Salud&Fit - <?php echo $__env->yieldContent('titulo'); ?></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/united/bootstrap.min.css">
</head>

<body>
	
	<div class="container">
		<ul class="nav nav-pills">
  			<li class="nav-item">
    			<a class="nav-link active" href="#">H&aacute;bitos</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">Antecedentes Personales</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">Antecedentes Familiares</a>
  			</li>
		</ul>
	</div>

	<hr>
	<div class="container">
		<?php echo $__env->yieldContent('contenido'); ?>	
	</div>

</body>
</html>