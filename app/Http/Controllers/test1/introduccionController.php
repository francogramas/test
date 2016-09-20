<?php

namespace test\Http\Controllers\test1;

use Illuminate\Http\Request;

use test\Http\Requests;
use test\Http\Controllers\Controller;

class introduccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
    	$etapa=0;
    	$mensaje="Usted está por comenzar el Test Caper1,  encontrará una serie de preguntas que permitirá conocer su forma de ser. Tenga presente que en verdad no existen respuestas que sean  correctas o incorrectas, dado que cada uno de los seres humanos somos distintos uno con el otro, y por lo tanto cada quien tiene su forma de pensar y actuar";
		return View('/test/introduccionView')
		->with('mensaje',$mensaje)
		->with('etapa',$etapa);

    }

    function store(Request $request){

    	$etapa=$request{'etapa_id'}+1;

    	if ($etapa==1){
    		$mensaje="Es muy importante que usted sea muy SINCERO (A) al contestar cada pregunta de ello depende la calidad de los resultados que el test arroja.";
    	}
    	elseif ($etapa==2) {
			$mensaje="Cuando usted haga  clic en comenzar se le despejara una página en donde va a encontrar   un enunciado y debajo de éste varias opciones de respuestas que en función de su forma de ser va escoger una de ellas.";
    	}
    	elseif ($etapa==3) {
    	    $mensaje="Dentro del test encontrará unos sencillos juegos mentales, los cuales fueron creados para que usted se relaje y asi sea ameno la realización del test.";
    	}
    	elseif ($etapa==4) {
    	    $mensaje="Observará en la pantalla  en la parte superior una barra de progreso que fue diseñada para que usted conozca cuanto le hace falta para terminar el test.";
    	}    	
    	elseif($etapa==5){
    		$mensaje="Un ejemplo de ello es lo siguiente:";
    	}
    	elseif($etapa==6) {
    		return redirect('/test/prueba');
    	}

		return View('/test/introduccionView')
		->with('mensaje',$mensaje)
		->with('etapa',$etapa);    
    }
}
