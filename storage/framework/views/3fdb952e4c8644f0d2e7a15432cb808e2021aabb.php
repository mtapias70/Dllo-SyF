<?php $__env->startSection('titulo', 'ANTROPOMETRIA'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="col-md-6 offset-3">
<form class="card card-body"> <!--<form class="card card-body bg-light"> -->
	<fieldset>
		<div class="form-group">
			<label for="ActividadFisica"><b>¿Cuántos días realiza actividad física o deportes?</b></label>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad1" name="ActividadFisica" class="custom-control-input" value="0">
		      <label class="custom-control-label" for="actividad1">No realiza ninguna actividad</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad2" name="ActividadFisica" class="custom-control-input" value="1-2">
		      <label class="custom-control-label" for="actividad2">Entre 1 a 2 veces por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad3" name="ActividadFisica" class="custom-control-input" value="2-3">
		      <label class="custom-control-label" for="actividad3">Entre 2 a 3 veces por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad4" name="ActividadFisica" class="custom-control-input" value="3-4" checked="">
		      <label class="custom-control-label" for="actividad4">Entre 3 a 4 veces por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad5" name="ActividadFisica" class="custom-control-input" value="4-5">
		      <label class="custom-control-label" for="actividad5">Entre 4 a 5 veces por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="actividad6" name="ActividadFisica" class="custom-control-input" value="5+">
		      <label class="custom-control-label" for="actividad6">5 o más veces por semana</label>
		  </div>
		</div>

		<div class="form-group">
			<label for="Duracion"><b>¿Cuánto tiempo emplea cada vez que realiza actividad física?</b></label>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="tiempo1" name="Tiempo" class="custom-control-input" value="0">
		      <label class="custom-control-label" for="tiempo1">Nada, no realizo actividad física</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="tiempo2" name="Tiempo" class="custom-control-input" value="30">
		      <label class="custom-control-label" for="tiempo2">Menos de 30 minutos</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="tiempo3" name="Tiempo" class="custom-control-input" value="30-60" checked="">
		      <label class="custom-control-label" for="tiempo3">Entre 30 a 60 minutos</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="tiempo4" name="Tiempo" class="custom-control-input" value="60-120">
		      <label class="custom-control-label" for="tiempo4">Entre 60 a 120 minutos (1-2 horas)</label>
		  </div>
		  <div class="custom-control custom-radio">
		      <input type="radio" id="tiempo5" name="Tiempo" class="custom-control-input" value="120+">
		      <label class="custom-control-label" for="tiempo5">Más de 120 minutos (más de 2 horas)</label>
		  </div>
		</div>

		<div class="form-group">
			<label for="Intensidad"><b>Intensidad de la actividad física</b> </label>
			<div class="custom-control custom-radio">
		    	<input type="radio" id="Intensidad1" name="Intensidad" class="custom-control-input" value="Ninguna">
		      <label class="custom-control-label" for="Intensidad1">Ninguna - pues no realiza ninguna actividad</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Intensidad2" name="Intensidad" class="custom-control-input" value="Baja">
		      <label class="custom-control-label" for="Intensidad2">Baja - puede hablar con naturalidad</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Intensidad3" name="Intensidad" class="custom-control-input" value="Media" checked="">
		      <label class="custom-control-label" for="Intensidad3">Media - puede hablar con un poco de esfuerzo</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Intensidad4" name="Intensidad" class="custom-control-input" value="Alta">
		      <label class="custom-control-label" for="Intensidad4">Alta - no le es posible hablar</label>
		  </div>
		</div>

		<div class="form-group">
			<label for="Duerme"><b>¿Cuántas horas duerme aproximadamente (no cuentan siestas)?</b></label>
			<div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme1" name="Duerme" class="custom-control-input" value="-5">
		      <label class="custom-control-label" for="Duerme1">Menos de 5 horas</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme2" name="Duerme" class="custom-control-input" value="5">
		      <label class="custom-control-label" for="Duerme2">5 horas</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme3" name="Duerme" class="custom-control-input" value="6">
		      <label class="custom-control-label" for="Duerme3">6 horas</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme4" name="Duerme" class="custom-control-input" value="7" checked="">
		      <label class="custom-control-label" for="Duerme4">7 horas</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme5" name="Duerme" class="custom-control-input" value="8">
		      <label class="custom-control-label" for="Duerme5">8 horas</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Duerme6" name="Duerme" class="custom-control-input" value="8+">
		      <label class="custom-control-label" for="Duerme6">Más de 8 horas</label>
		  </div>
		</div>

		<div class="form-group">
			<label for="Fuma"><b>¿Fuma cigarrillos, tabaco o similares?</b></label>
			<div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma1" name="Fuma" class="custom-control-input" value="0" checked="">
		      <label class="custom-control-label" for="Fuma1">No fumo</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma2" name="Fuma" class="custom-control-input" value="1">
		      <label class="custom-control-label" for="Fuma2">Ocacionalmente</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma3" name="Fuma" class="custom-control-input" value="1-5">
		      <label class="custom-control-label" for="Fuma3">Fumo 1-5 cigarrillos al día</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma4" name="Fuma" class="custom-control-input" value="5-10">
		      <label class="custom-control-label" for="Fuma4">Fumo 5-10 cigarrillos al día</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma5" name="Fuma" class="custom-control-input" value="10-20">
		      <label class="custom-control-label" for="Fuma5">Fumo 10-20 cigarrillos al día</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Fuma6" name="Fuma" class="custom-control-input" value="20+">
		      <label class="custom-control-label" for="Fuma6">Fumo mas de 20 cigarrillos al día</label>
		  </div>
		</div>
			
		<div class="form-group">
			<label for="Fuma"><b>¿Consume licor?</b></label>
			<div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe1" name="Bebe" class="custom-control-input" value="0" checked="">
		      <label class="custom-control-label" for="Bebe1">No consumo licor</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe2" name="Bebe" class="custom-control-input" value="1">
		      <label class="custom-control-label" for="Bebe2">Ocacionalmente</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe3" name="Bebe" class="custom-control-input" value="2">
		      <label class="custom-control-label" for="Bebe3">Sólo social</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe4" name="Bebe" class="custom-control-input" value="3">
		      <label class="custom-control-label" for="Bebe4">Una vez por semana sin embriaguez</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe5" name="Bebe" class="custom-control-input" value="4">
		      <label class="custom-control-label" for="Bebe5">Una vez por semana hasta embriagarme</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Bebe6" name="Bebe" class="custom-control-input" value="5">
		      <label class="custom-control-label" for="Bebe6">Frecuentemente en la semana</label>
		  </div>
		</div>

		<div class="form-group">
			<label for="Fuma"><b>¿Consume sustancias alucinógenas?</b></label>
			<div class="custom-control custom-radio">
		    	<input type="radio" id="Alucionogenos1" name="Alucionogenos" class="custom-control-input" value="0" checked="">
		      <label class="custom-control-label" for="Alucionogenos1">No consume alucinógenos</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Alucionogenos2" name="Alucionogenos" class="custom-control-input" value="1">
		      <label class="custom-control-label" for="Alucionogenos2">Consume menos de una vez por mes</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Alucionogenos3" name="Alucionogenos" class="custom-control-input" value="2">
		      <label class="custom-control-label" for="Alucionogenos3">Consume una vez por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Alucionogenos4" name="Alucionogenos" class="custom-control-input" value="3">
		      <label class="custom-control-label" for="Alucionogenos4">Consume una vez por semana</label>
		  </div>
		  <div class="custom-control custom-radio">
		    	<input type="radio" id="Alucionogenos5" name="Alucionogenos" class="custom-control-input" value="4">
		      <label class="custom-control-label" for="Alucionogenos5">Consume varias veces por semana</label>
		  </div>
		</div>

		<div class="form-group">
			<label class="col-form-label" for="Medicado"><b>¿Toma alguna medicación de forma habitual?</b></label>
			<input type="text" class="form-control" placeholder="No" id="Medicado">
		</div>

	</fieldset>
	
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantillas.antropometria', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>