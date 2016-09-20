<?php

namespace test\Http\Controllers\test1;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use test\Http\Requests;
use test\Http\Controllers\Controller;
use test\Models\tests\evaluacion;
use test\Models\tests\evaluacionestado;
use test\Models\tests\evaluacionrespuestas;
use test\Models\tests\pregunta;
use test\Models\tests\respuestas;
use test\Models\tests\preguntaimagen;

use Session;

class testController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){

        $user = Auth::user();
        $estado_id=1;
    	$cont=evaluacion::where('user_id',$user{'id'})
		->where('estado_id','1')
    	->count();
    	
    	$evaluacion=evaluacion::where('user_id',$user{'id'})
		->where('estado_id','1')
    	->first();
    	

        $ptotal=pregunta::count();
        $presuelta=evaluacionrespuestas::where('evaluacion_id',$evaluacion{'id'})->count();
        
        if ($presuelta>=$ptotal-1){
            $estado_id=2;
        }

        if ($presuelta>=$ptotal){
            return redirect('/test/finalizado');
        } 
        if ($evaluacion{'id'}>0){
            $valorBarra=round(($presuelta/$ptotal)*100);
            $pregunta=pregunta::whereNotIn('id',
            function($query) use($evaluacion) {$query
                ->selectRaw('respuestas.pregunta_id')
                ->from('respuestas')
                ->join('evaluacionrespuestas','evaluacionrespuestas.respuesta_id','=','respuestas.id')
                ->where('evaluacionrespuestas.evaluacion_id','=',$evaluacion{'id'})
                ->groupBy('respuestas.pregunta_id');})
            ->inRandomOrder()
            ->first();

            $preguntaimagen=preguntaimagen::where('pregunta_id',$pregunta{'id'})->first();
            
            $mostrar='hidden';        
            if($preguntaimagen{'pregunta_id'}>0) {
                $mostrar="";
            }
        	
        	$respuestas=respuestas::where('pregunta_id',$pregunta{'id'})
        	->inRandomOrder()->get();
        	
        	$mensaje="No hay";
        	if ($cont>0){

        		$mensaje="Si hay";
        	}
        	return View('/test/testView')
        	->with('mensaje',$mensaje)
        	->with('user_id',$user{'id'})
        	->with('evaluacion_id',$evaluacion{'id'})
        	->with('pregunta',$pregunta)        
        	->with('respuestas',$respuestas)
            ->with('valorBarra',$valorBarra)
            ->with('estado_id',$estado_id)
            ->with('mostrar',$mostrar)        
            ->with('preguntaimagen',$preguntaimagen);
        }
        else{
            return redirect('/test/finalizado');            
        }
    }

    function store(Request $request){
        
        $evaluacionrespuestas=evaluacionrespuestas::where('evaluacion_id',$request{'evaluacion_id'})
        ->where('respuesta_id',$request{'respuesta_id'})
        ->count();
        
        if($evaluacionrespuestas==0 and $request{'evaluacion_id'}>0 and $request{'respuesta_id'}>0){
            try {
                evaluacionrespuestas::create($request->all());

                if ($request{'estado_id'}==2){
                    $evaluacion=evaluacion::FindOrFail($request{'evaluacion_id'});   
                    $input=$request->all();
                    $evaluacion->fill($input)->save();
                    Session::flash('update','¡Usted finalizó el test exitosamente! Gracias por su colaboración.');
                    return redirect('/test/finalizado');
                }   
            } catch (Exception $e) {    
                        return $e;
            }
        }	        
        return redirect()->route('test.index');    	
    }
}
