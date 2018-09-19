@extends('plantillas.antropometria')

@section('titulo', 'ANTROPOMETRIA')

@section('contenido')
<div class="col-md-6 offset-3">
	<form class="card card-body" > <!--method="POST" action="controllerAnamnesis"> -->
		<fieldset>
			@foreach ($bloques as $bloque)
				<div class="form-group">
					<label for="P{{$loop->iteration}}"><b>{{$bloque['pregunta']}}</b></label>
					@foreach ($bloque['opciones'] as $opcion)
						<div class="custom-control custom-radio">
					    <input type="radio" id="Op{{$loop->parent->iteration.$loop->iteration}}" name="Pr{{$loop->parent->iteration}}" class="custom-control-input" value="{{$opcion}}">
					    <label class="custom-control-label" for="Op{{$loop->parent->iteration.$loop->iteration}}">{{$opcion}}</label>
					  </div>
				 	@endforeach
				</div>
			@endforeach
		</fieldset>
	</form>
	</div>
@endsection