<?php

namespace test\Http\Controllers\test1;

use Illuminate\Http\Request;

use test\Http\Requests;
use test\Http\Controllers\Controller;
use test\Models\tests\evaluacion;
use Illuminate\Support\Facades\Auth;


class pruebaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $user = Auth::user();
    	$etapa=0;
    	$pregunta="Me gustaría participar en un club deportivo?";
    	$respuesta1="Si.";
    	$respuesta2="No se.";
    	$respuesta3="No.";
		return View('/test/pruebasView')
		->with('etapa',$etapa)
		->with('pregunta',$pregunta)
		->with('respuesta1',$respuesta1)
		->with('respuesta2',$respuesta2)
		->with('respuesta3',$respuesta3)
        ->with('user_id',$user{'id'});
    }
    function store(Request $request){
        $user = Auth::user();
        $etapa=$request{'etapa_id'}+1;
    	if ($etapa==1){
    		$pregunta="Me gusta relacionarme con personas que que vivan en el campo.";
    		$respuesta1="Totalmente cierto";
    		$respuesta2="Parcialmente cierto";
    		$respuesta3="No es Cierto.";
    	}
    	elseif ($etapa==2) {
    	$pregunta="Está listo para inciar el test?.";
    		$respuesta1="Si";
    		$respuesta2="  ";
    		$respuesta3="  ";			
    	}
    	else{
            evaluacion::create($request->all());
    		return redirect('/test/test');
    	}
        return View('/test/pruebasView')
        ->with('pregunta',$pregunta)
        ->with('respuesta1',$respuesta1)
        ->with('respuesta2',$respuesta2)
        ->with('respuesta3',$respuesta3)
        ->with('etapa',$etapa)
        ->with('user_id',$user{'id'});
    }
}
