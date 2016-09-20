<?php

namespace test\Http\Controllers;

use Illuminate\Http\Request;

use test\Http\Requests;
use test\models\almacen\terceros;
use test\models\general\pais;
use Illuminate\Support\Facades\Auth;
use test\http\Requests\updateTerceroRequest;
use test\http\Requests\createTerceroRequest;
use Session;


class tercerosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //        
        $user = Auth::user();
        $terceros=terceros::where('user_id',$user{'id'})->count();
        $pais1 = pais::pluck('name','id')->prepend('Seleccione su pais');
        
        if ($terceros>0){            
            return redirect('/empresa');
        }
        else{
            return View('/general/tercerosView')->with('pais1',$pais1)
            ->with('user',$user)
            ->with('terceros',$terceros);
        }
    }

    public function store(createTerceroRequest $request)
    {
        //
        terceros::create($request->all());
        $pais1 = pais::pluck('name','id')->prepend('Seleccione su pais');
        $terceros =terceros::paginate(10);
        Session::flash('save','El registro fue guardado correctamente');
        return redirect('terceros');        
    }
    
}