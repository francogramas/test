<?php

namespace test\Http\Controllers\general;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use test\Http\Requests;
use test\Http\Controllers\Controller;
use test\models\general\pais;
use test\models\general\estados;
use test\models\general\ciudades;
use test\models\general\empresa;
use Session;


class empresaController extends Controller
{
    public function index()
	{
				
        $user = Auth::user();
        $count=empresa::where('user_id',$user{'id'})->count();

		$empresa1=empresa::select('empresa.id','empresa.nit','razonsocial','direccion','telefono','correo','ciudad','estados.id as estado','pais.id as pais')
		->join('ciudades','ciudades.id','=','empresa.ciudad')		
		->join('estados','estados.id','=','ciudades.estados')
		->join('pais','pais.id','=','estados.pais')	
		->where('empresa.user_id',$user{'id'})
		->first();
		$ciudades1=ciudades::where('estados',$empresa1{'estado'})->pluck('name','id');
		$estados1=estados::where('pais',$empresa1{'pais'})->pluck('name','id');
        $pais1 = pais::pluck('name','id')->prepend('Seleccione su pais');
        $user_id = $user{'id'};

        if ($count==0){
			$texto='Guardar';
			return View('/empresa/empresaAgregar')
	        ->with('pais1', $pais1)
	        ->with('estados1', $estados1)
	        ->with('ciudades1', $ciudades1)
	        ->with('empresa1', $empresa1)
	        ->with('user_id', $user_id)	        
	        ->with('texto', $texto);
		}
		else
		{
        	return redirect('test/introduccion');			
		}
	}

	public function create()
	{
		
	}

	public function store(Request $request)
	{
        $user = Auth::user();		
		$count=empresa::where('user_id',$user{'id'})->count();
		if ($count==0){
			empresa::create($request->all());	
		}		
        return redirect()->route('empresa.index');
	}

	public function edit(Request $request)
	{
		$count=empresa::count();
		if ($count>0){
			$empresa=empresa::FindOrFail($request{'id'});				
			$input=$request->all();
    	    $empresa ->fill($input)->save();
	        Session::flash('update','El registro fue actualizado correctamente');

		}
        
        return redirect()->route('empresa.index');
	}
}