@extends('plantillas.base')

@section('titulo', 'ANTECEDENTES FAMILIARES')

@section('scripts')
<script type="text/javascript">
  function mostrar(bloque) { document.getElementById(bloque).style.display = 'block'; }
  function ocultar(bloque) { document.getElementById(bloque).style.display = 'none'; }
</script>
@endsection

@section('contenido')
<form name="formulario">

  <div class="form-group"> <!-- 1. muerte prematura -->
    <label class="control-label">¿Algún familiar ha muerto en forma prematura (menor a 50 años)? (muerte súbita, infarto...)</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No1" name="Radio1" class="custom-control-input" checked="" onclick="ocultar('Bloque1')">
        <label class="custom-control-label" for="No1">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si1" name="Radio1" class="custom-control-input" onclick="mostrar('Bloque1')">
        <label class="custom-control-label" for="Si1">Si</label>
      </div>

      <div id='Bloque1' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P1">
          <label class="custom-control-label" for="P1">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M1">
          <label class="custom-control-label" for="M1">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H1">
          <label class="custom-control-label" for="H1">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A1">
          <label class="custom-control-label" for="A1">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He1">
          <label class="custom-control-label" for="He1">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T1">
          <label class="custom-control-label" for="N1">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T1">
          <label class="custom-control-label" for="T1">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S1">
          <label class="custom-control-label" for="S1">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 2. arritmias -->
    <label class="control-label">¿Algún miembro de su familia padece de arritmias?</label>
    <div class="col-lg-20">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No2" name="Radio2" class="custom-control-input" checked="" onclick="ocultar('Bloque2')">
        <label class="custom-control-label" for="No2">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si2" name="Radio2" class="custom-control-input" onclick="mostrar('Bloque2')">
        <label class="custom-control-label" for="Si2">Si</label>
      </div>

      <div id='Bloque2' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P2">
          <label class="custom-control-label" for="P2">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M2">
          <label class="custom-control-label" for="M2">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H2">
          <label class="custom-control-label" for="H2">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A2">
          <label class="custom-control-label" for="A2">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He2">
          <label class="custom-control-label" for="He2">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T2">
          <label class="custom-control-label" for="N2">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T2">
          <label class="custom-control-label" for="T2">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S2">
          <label class="custom-control-label" for="S2">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 3. sindrome QT -->
    <label class="control-label">¿Algún miembro de su familia padece de síndrome de QT largo?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No3" name="Radio3" class="custom-control-input" checked="" onclick="ocultar('Bloque3')">
        <label class="custom-control-label" for="No3">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si3" name="Radio3" class="custom-control-input" onclick="mostrar('Bloque3')">
        <label class="custom-control-label" for="Si3">Si</label>
      </div>

      <div id='Bloque3' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P3">
          <label class="custom-control-label" for="P3">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M3">
          <label class="custom-control-label" for="M3">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H3">
          <label class="custom-control-label" for="H3">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A3">
          <label class="custom-control-label" for="A3">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He3">
          <label class="custom-control-label" for="He3">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T3">
          <label class="custom-control-label" for="N3">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T3">
          <label class="custom-control-label" for="T3">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S3">
          <label class="custom-control-label" for="S3">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 4. hipertrofia cardiaca -->
    <label class="control-label">¿Algún miembro de su familia padece de hipertrofia cardíaca?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No4" name="Radio4" class="custom-control-input" checked="" onclick="ocultar('Bloque4')">
        <label class="custom-control-label" for="No4">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si4" name="Radio4" class="custom-control-input" onclick="mostrar('Bloque4')">
        <label class="custom-control-label" for="Si4">Si</label>
      </div>

      <div id='Bloque4' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P4">
          <label class="custom-control-label" for="P4">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M4">
          <label class="custom-control-label" for="M4">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H4">
          <label class="custom-control-label" for="H4">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A4">
          <label class="custom-control-label" for="A4">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He4">
          <label class="custom-control-label" for="He4">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T4">
          <label class="custom-control-label" for="N4">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T4">
          <label class="custom-control-label" for="T4">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S4">
          <label class="custom-control-label" for="S4">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 5. marfan -->
    <label class="control-label">¿Algún miembro de su familia padece de síndrome de Marfan?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No5" name="Radio5" class="custom-control-input" checked="" onclick="ocultar('Bloque5')">
        <label class="custom-control-label" for="No5">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si5" name="Radio5" class="custom-control-input" onclick="mostrar('Bloque5')">
        <label class="custom-control-label" for="Si5">Si</label>
      </div>

      <div id='Bloque5' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P5">
          <label class="custom-control-label" for="P5">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M5">
          <label class="custom-control-label" for="M5">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H5">
          <label class="custom-control-label" for="H5">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A5">
          <label class="custom-control-label" for="A5">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He5">
          <label class="custom-control-label" for="He5">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T5">
          <label class="custom-control-label" for="N5">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T5">
          <label class="custom-control-label" for="T5">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S5">
          <label class="custom-control-label" for="S5">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 6. accidente cerebovascular -->
    <label class="control-label">¿Algún miembro de su familia sufrió un accidente cerebrovascular (ACV)?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No6" name="Radio6" class="custom-control-input" checked="" onclick="ocultar('Bloque6')">
        <label class="custom-control-label" for="No6">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si6" name="Radio6" class="custom-control-input" onclick="mostrar('Bloque6')">
        <label class="custom-control-label" for="Si6">Si</label>
      </div>

      <div id='Bloque6' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P6">
          <label class="custom-control-label" for="P6">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M6">
          <label class="custom-control-label" for="M6">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H6">
          <label class="custom-control-label" for="H6">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A6">
          <label class="custom-control-label" for="A6">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He6">
          <label class="custom-control-label" for="He6">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T6">
          <label class="custom-control-label" for="N6">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T6">
          <label class="custom-control-label" for="T6">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S6">
          <label class="custom-control-label" for="S6">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 7. tensión arterial alta -->
    <label class="control-label">¿Algún miembro de tu familia sufre de tensión arterial alta (HTA)?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No7" name="Radio7" class="custom-control-input" checked="" onclick="ocultar('Bloque7')">
        <label class="custom-control-label" for="No7">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si7" name="Radio7" class="custom-control-input" onclick="mostrar('Bloque7')">
        <label class="custom-control-label" for="Si7">Si</label>
      </div>

      <div id='Bloque7' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P7">
          <label class="custom-control-label" for="P7">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M7">
          <label class="custom-control-label" for="M7">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H7">
          <label class="custom-control-label" for="H7">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A7">
          <label class="custom-control-label" for="A7">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He7">
          <label class="custom-control-label" for="He7">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T7">
          <label class="custom-control-label" for="N7">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T7">
          <label class="custom-control-label" for="T7">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S7">
          <label class="custom-control-label" for="S7">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 8. deabetes -->
    <label class="control-label">¿Algún miembro de tu familia sufre de Diabetes?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No8" name="Radio8" class="custom-control-input" checked="" onclick="ocultar('Bloque8')">
        <label class="custom-control-label" for="No8">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si8" name="Radio8" class="custom-control-input" onclick="mostrar('Bloque8')">
        <label class="custom-control-label" for="Si8">Si</label>
      </div>

      <div id='Bloque8' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P8">
          <label class="custom-control-label" for="P8">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M8">
          <label class="custom-control-label" for="M8">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H8">
          <label class="custom-control-label" for="H8">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A8">
          <label class="custom-control-label" for="A8">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He8">
          <label class="custom-control-label" for="He8">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T8">
          <label class="custom-control-label" for="N8">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T8">
          <label class="custom-control-label" for="T8">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S8">
          <label class="custom-control-label" for="S8">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 9. dislipidemia -->
    <label class="control-label">¿Algún miembro de su familia presenta Dislipidemia (Colesterol y/o Triglicéridos altos)?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No9" name="Radio9" class="custom-control-input" checked="" onclick="ocultar('Bloque9')">
        <label class="custom-control-label" for="No9">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si9" name="Radio9" class="custom-control-input" onclick="mostrar('Bloque9')">
        <label class="custom-control-label" for="Si9">Si</label>
      </div>

      <div id='Bloque9' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P9">
          <label class="custom-control-label" for="P9">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M9">
          <label class="custom-control-label" for="M9">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H9">
          <label class="custom-control-label" for="H9">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A9">
          <label class="custom-control-label" for="A9">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He9">
          <label class="custom-control-label" for="He9">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T9">
          <label class="custom-control-label" for="N9">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T9">
          <label class="custom-control-label" for="T9">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S9">
          <label class="custom-control-label" for="S9">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

  <div class="form-group"> <!-- 0. otra enfermedad -->
    <label class="control-label">¿Algún miembro de su familia presenta otra enfermedad que debamos conocer?</label>
    <div class="col-lg-10">
      
      <div class="custom-control custom-radio">
        <input type="radio" id="No10" name="Radio10" class="custom-control-input" checked="" onclick="ocultar('Bloque10')">
        <label class="custom-control-label" for="No10">No</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" id="Si1" name="Radio10" class="custom-control-input" onclick="mostrar('Bloque10')">
        <label class="custom-control-label" for="Si1">Si</label>
      </div>

      <div id='Bloque1' style="display: none;" class="col-lg-3">

        <small id="fileHelp" class="form-text text-muted"><b>Primer grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="P10">
          <label class="custom-control-label" for="P10">Padre </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="M10">
          <label class="custom-control-label" for="M10">Madre</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="H10">
          <label class="custom-control-label" for="H10">Hijo(a) </label>
        </div>
      
        <small id="fileHelp" class="form-text text-muted"><b>Segundo Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="A10">
          <label class="custom-control-label" for="A10">Abuelo(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="He10">
          <label class="custom-control-label" for="He10">Hermano(a)</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T10">
          <label class="custom-control-label" for="N10">Nieto(a) </label>
        </div>

        <small id="fileHelp" class="form-text text-muted"><b>Tercer Grado</b></small>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="T10">
          <label class="custom-control-label" for="T10">Tío(a)  </label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="S10">
          <label class="custom-control-label" for="S10">Sobrino(a)</label>
        </div>

      </div>

    </div>
  </div>

</form>
@endsection