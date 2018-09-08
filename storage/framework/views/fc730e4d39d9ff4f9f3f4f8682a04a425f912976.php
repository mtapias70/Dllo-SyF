<?php $__env->startSection('titulo', 'ANTROPOMETRIA'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="col-md-10 offset-1">
<form class="card card-body bg-light">
	<fieldset>

		<div class="form-group row">
			<label for="ActividadFisica" class="col-sm-6 col-form-label">¿Cuántos días realiza actividad física o deportes?</label>
			<select class="form-control col-sm-6" id="ActividadFisica">
				<option></option>
				<option value="sedentario">No realiza ninguna actividad</option>
				<option>1 vez por semana</option>
				<option>2 veces por semana</option>
				<option>3 veces por semana</option>
				<option>4 veces por semana</option>
				<option>5 veces por semana</option>
				<option>6 veces por semana</option>
				<option>7 veces por semana</option>
			</select>
		</div>

		<div class="form-group row">
			<label for="Duracion" class="col-sm-6 col-form-label">¿Cuánto tiempo emplea cada vez que realiza actividad?</label>
			<select class="form-control col-sm-6" id="Duracion">
				<option></option>
				<option value="sedentario">No realiza ninguna actividad</option>
				<option value="15">15 minutos aproximadamente</option>
				<option value="30">30 minutos aproximadamente</option>
				<option value="45">45 minutos aproximadamente</option>
				<option value="60">una hora aproximadamente</option>
				<option value="75">una hora y 15 minutos aproximadamente</option>
				<option value="90">hora y media aproximadamente</option>
				<option value="120">dos horas aproximadamente</option>
				<option value="200">más de 2 horas</option>
			</select>
		</div>

		<div class="form-group  row">
			<label for="Intensidad" class="col-sm-6 col-form-label">Intensidad de la práctica</label>
			<select class="form-control col-sm-6" id="Intensidad">
				<option></option>
				<option value="Ninguna">Ninguna - pues no realiza ninguna actividad</option>
				<option value="Baja">Baja - puede hablar con naturalidad</option>
				<option value="Media">Media - puede hablar con un poco de esfuerzo</option>
				<option value="Alta">Alta - no le es posible hablar</option>
			</select>
		</div>

		<div class="form-group  row">
			<label for="Duerme" class="col-sm-6 col-form-label">¿Cuántas horas duerme (no cuentan siestas)?</label>
			<select class="form-control col-sm-6" id="Duerme">
				<option></option>
				<option>Menos de 4 horas</option>
				<option>5 horas</option>
				<option>6 horas</option>
				<option>7 horas</option>
				<option>8 horas</option>
				<option>más de 8 horas</option>
			</select>
		</div>

		<div class="form-group  row">
			<label for="Fuma" class="col-sm-6 col-form-label">¿Fuma cigarrillos, tabaco o similares?</label>
			<select class="form-control col-sm-6" id="Fuma">
				<option></option>
				<option>No fuma</option>
				<option>Fuma 1 vez por mes</option>
				<option>Fuma 1 vez por semana</option>
				<option>Fuma 2 - 3 veces por semana</option>
				<option>Fuma 1 veces por día</option>
				<option>Fuma 2 -3 veces por día</option>
				<option>Fuma más de 3 veces por día</option>
			</select>
		</div>

		<div class="form-group  row">
			<label for="Bebe" class="col-sm-6 col-form-label">¿Consume licor?</label>
			<select class="form-control col-sm-6" id="Bebe">
				<option></option>
				<option value="0">No consumo licor</option>
				<option value="1">menos de 10 cm3 por mes</option>
				<option value="2">menos de 10 cm3 por semana</option>
				<option value="3">Una vez por semana hasta embriagarme</option>
				<option value="4">1 veces por día</option>
				<option value="5">2 -3 veces por día</option>
				<option value="6">más de 3 veces por día</option>
			</select>
		</div>

		<div class="form-group  row">
			<label for="Alucionogenos" class="col-sm-6 col-form-label">¿Consume sustancias alucinógenas?</label>
			<select class="form-control col-sm-6" id="Alucionogenos">
				<option></option>
				<option>No consume alucinógenos</option>
				<option>Consume menos de una vez por mes</option>
				<option>Consume una vez por semana</option>
				<option>Consume varias veces por semana</option>
			</select>
		</div>

		<div class="form-group row">
			<label for="Medicado" class="col-sm-6 col-form-label">¿Toma alguna medicación de forma habitual?</label>
			<input type="text" class="form-control col-sm-6" placeholder="No" id="Medicado">
		</div>

	</fieldset>
	
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantillas.antropometria', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>