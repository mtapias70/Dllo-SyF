@extends('plantillas.base')

@section('titulo', 'ANTECEDENTES PERSONALES')

@section('scripts')
<script type="text/javascript">
  function mostrar(bloque) { document.getElementById(bloque).style.display = 'block'; }
  function ocultar(bloque) { document.getElementById(bloque).style.display = 'none'; }
</script>
@endsection

@section('contenido')
<form name="formulario"> <!-- prueba -->

  <div class="form-group"> <!-- problemas cardiacos -->
    <label class="control-label">¿Tiene problemas cardiacos?</label>
    <div class="col-lg-10">
      
      <div class="radio">
        <label> 
          <input type="radio" name="Cardiaco" id="No1" value="0" checked="" onclick="ocultar('Bloque1')">     
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Cardiaco" id="Si1" value="1" onclick="mostrar('Bloque1')">
          Si
        </label>
      </div>

      <div id='Bloque1' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema" id="problema" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto1" id="Cuanto1">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- dolor de pecho -->
    <label class=" control-label">¿Ha tenido dolor en el pecho u opresión?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Pecho" id="No3" value="0" checked="" onclick="ocultar('Bloque3')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Pecho" id="Si3" value="1" onclick="mostrar('Bloque3')">
          Si
        </label>
      </div>

      <div id='Bloque3' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto3" id="Cuanto3">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- problemas de asma -->
    <label class=" control-label">¿Tiene asma?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Asma" id="No4" value="0" checked="" onclick="ocultar('Bloque4')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Asma" id="Si4" value="1" onclick="mostrar('Bloque4')">
          Si
        </label>
      </div>

      <div id='Bloque4' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto4" id="Cuanto4">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- cansado o fatigado -->
    <label class=" control-label">¿Suele sentirse cansado o fatigado con facilidad?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Fatiga" id="No5" value="0" checked="" onclick="ocultar('Bloque5')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Fatiga" id="Si5" value="1" onclick="mostrar('Bloque5')">
          Si
        </label>
      </div>

      <div id='Bloque5' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto5" id="Cuanto5">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- problemas de presión -->
    <label class=" control-label">¿tiene o ha tenido presión alta alguna vez?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Presion" id="No6" value="0" checked="" onclick="ocultar('Bloque6')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Presion" id="Si6" value="1" onclick="mostrar('Bloque6')">
          Si
        </label>
      </div>

      <div id='Bloque6' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto6" id="Cuanto6">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- Diabetes -->
    <label class=" control-label">¿Tiene diabetes?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="Diabetes" id="No7" value="0" checked="" onclick="ocultar('Bloque7')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="Diabetes" id="Si7" value="1" onclick="mostrar('Bloque7')">
          Si
        </label>
      </div>

      <div id='Bloque7' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto7" id="Cuanto7">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- problemas con ejercicio -->
    <label class=" control-label">Ha tenido o tiene con el ejercicio</label>
    <div class="col-lg-10">

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Palpitaciones">
        <label class="custom-control-label" for="Palpitaciones">Palpitaciones</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Taquicardias">
        <label class="custom-control-label" for="Taquicardias">Taquicardias</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Nauseas">
        <label class="custom-control-label" for="Nauseas">Náuseas</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Desmayos">
        <label class="custom-control-label" for="Desmayos">Desmayos</label>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- consume -->
    <label class=" control-label">Para perder o ganar peso, o mejorar el rendimiento deportivo ha tomado o toma: </label>
    <div class="col-lg-10">

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Medicamentos">
        <label class="custom-control-label" for="Medicamentos">Medicamentos</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Esteroides">
        <label class="custom-control-label" for="Esteroides">Esteroides</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Anabolicos">
        <label class="custom-control-label" for="Anabolicos">Anabólicos</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Suplementos">
        <label class="custom-control-label" for="Suplementos">Suplementos</label>
      </div>

    </div>
  </div> 

  <div class="form-group"> <!-- problemas de alergias -->
    <label class=" control-label">¿Tiene alguna alergia?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="alergia" id="No8" value="0" checked="" onclick="ocultar('Bloque8')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="alergia" id="Si8" value="1" onclick="mostrar('Bloque8')">
          Si
        </label>
      </div>

      <div id='Bloque8' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema8" id="problema8" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto8" id="Cuanto8">
        </div>
      </div>
        
    </div>
  </div>

  <div class="form-group"> <!-- problemas de piel -->
    <label class=" control-label">¿Tiene algún problema de piel?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="piel" id="No9" value="0" checked="" onclick="ocultar('Bloque9')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="piel" id="Si9" value="1" onclick="mostrar('Bloque9')">
          Si
        </label>
      </div>

      <div id='Bloque9' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema9" id="problema9" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015"  name="Cuanto9" id="Cuanto9">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- problemas neurológicos -->
    <label class=" control-label">¿Tiene alguna enfermedad neurológica?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="neuro" id="No10" value="0" checked="" onclick="ocultar('Bloque10')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="neuro" id="Si10" value="1" onclick="mostrar('Bloque10')">
          Si
        </label>
      </div>

      <div id='Bloque10' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema10" id="problema10" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto10" id="Cuanto10">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- dolor de cabeza intenso -->
    <label class=" control-label">¿Ha tenido dolor de cabeza intenso?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="cabeza" id="No11" value="0" checked="" onclick="ocultar('Bloque11')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="cabeza" id="Si11" value="1" onclick="mostrar('Bloque11')">
          Si
        </label>
      </div>

      <div id='Bloque11' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto11" id="Cuanto11">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- convulsiones -->
    <label class=" control-label">¿Ha tenido convulsiones?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="convulsiones" id="No12" value="0" checked="" onclick="ocultar('Bloque12')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="convulsiones" id="Si12" value="1" onclick="mostrar('Bloque12')">
          Si
        </label>
      </div>

      <div id='Bloque13' style="display: none;">
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto12" id="Cuanto12">
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- riesgo cardiovascular -->
    <label class=" control-label">¿Tiene otro factor de riesgo cardiovascular?</label>
    <div class="col-lg-10">

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Dislipidemia">
        <label class="custom-control-label" for="Palpitaciones">Dislipidemia (Colesterol alto y/o trigliceridos altos)</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Obesidad">
        <label class="custom-control-label" for="Obesidad">Obesidad</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Estres">
        <label class="custom-control-label" for="Estres">Estrés</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Tabaquismo">
        <label class="custom-control-label" for="Tabaquismo">Tabaquismo</label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="Sedentarismo">
        <label class="custom-control-label" for="Sedentarismo">Sedentarismo</label>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- problemas articulares u óseos -->
    <label class=" control-label">¿Tiene problemas articulares u óseos?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="articulares" id="No13" value="0" checked="" onclick="ocultar('Bloque13')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="articulares" id="Si13" value="1" onclick="mostrar('Bloque13')">
          Si
        </label>
      </div>

      <div id='Bloque13' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema13" id="problema13" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto13" id="Cuanto13">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- lesiones -->
    <label class=" control-label">¿Tiene o ha tenido lesiones previas en huesos, articulaciones o músculos?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="lesiones" id="No14" value="0" checked="" onclick="ocultar('Bloque14')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="lesiones" id="Si14" value="1" onclick="mostrar('Bloque14')">
          Si
        </label>
      </div>

      <div id='Bloque14' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema14" id="problema14" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto14" id="Cuanto14">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- enfermedad no mencionada -->
    <label class=" control-label">¿Existe algún otro problema o enfermedad no mencionada aquí que debiera confiarnos?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="nomencionada" id="No15" value="0" checked="" onclick="ocultar('Bloque15')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="nomencionada" id="Si15" value="1" onclick="mostrar('Bloque15')">
          Si
        </label>
      </div>

      <div id='Bloque15' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema15" id="problema15" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto15" id="Cuanto15">
        </div>
      </div>

    </div>
  </div>

  <div class="form-group"> <!-- cirugías -->
    <label class=" control-label">¿¿Tiene alguna cirugía?</label>
    <div class="col-lg-10">

      <div class="radio">
        <label>
          <input type="radio" name="cirugia" id="No16" value="0" checked="" onclick="ocultar('Bloque16')">
          No
        </label>
      </div>

      <div class="radio">
        <label>
          <input type="radio" name="cirugia" id="Si16" value="1" onclick="mostrar('Bloque16')">
          Si
        </label>
      </div>

      <div id='Bloque16' style="display: none;">
        <div>
          <label>¿Cuáles?: </label> 
          <input type="text" name="Problema16" id="problema16" placeholder="digítelas por favor...">
        </div>
        <div>
          <label>¿Desde qué año?: </label> 
          <input type="number" min='1900' max="2100" value="2015" name="Cuanto16" id="Cuanto16">
        </div>
      </div>

    </div>
  </div>

</form>
@endsection
