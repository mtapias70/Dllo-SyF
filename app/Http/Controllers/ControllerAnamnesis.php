<?php

namespace SaludyFit\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerAnamnesis extends Controller
{
  private $idCliente;
  private $idPregunta;
  private $Fecha;
  private $Respuesta;
  //funcion que inicializa una encuesta
  public function personales(){

  	$data = Storage::disk('vistas')->get('Anamnesis/habitos.json');
  	$bloques = json_decode($data,true);
  	//dd($bloques);
  	return view('Anamnesis.personales',compact('bloques'));
    }
}
