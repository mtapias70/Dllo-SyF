@extends('plantillas.base')

@section('scripts')
<script type="text/javascript">
  function mostrar(bloque) { document.getElementById(bloque).style.display = 'block'; }
  function ocultar(bloque) { document.getElementById(bloque).style.display = 'none'; }
</script>
@endsection

@section('contenido')
<form name="formulario">

  <div class="form-group">
    <label class="col-lg-2 control-label">¿Tiene problemas cardiacos?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Cardiaco" id="No" value="0" checked="" onclick="ocultar('BCardiaco')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Cardiaco" id="Si" value="1" onclick="mostrar('BCardiaco')">
          Si
        </label>
      </div>

      <div id='BCardiaco' style="display: none;">
        <div>
          <label>especifique: </label> 
          <input type="text" name="Problema" id="problema" placeholder="¿cuales?">
        </div>
        <div>
          <label>Hace cuánto: </label> 
          <input type="month" name="cuanto" id="cuanto">
        </div>
      </div>

    </div>
  </div>

</form>
@endsection