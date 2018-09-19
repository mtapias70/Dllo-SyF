<?php $__env->startSection('titulo', 'Bienvenida'); ?>

<?php $__env->startSection('contenido'); ?>

	<div class="jumbotron">
			<h1 class="display-3"> Agúntanos un poco que ya pronto saldremos ;) </h1>
	</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantillas.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>