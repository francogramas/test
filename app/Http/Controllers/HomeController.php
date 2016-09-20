<?php

namespace test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use test\models\almacen\terceros;
use test\models\general\empresa;
use test\models\tests\evaluacion;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $terceros=terceros::where('user_id',$user{'id'})->count();
        $empresa=empresa::where('user_id',$user{'id'})->count();
        $evaluacion=evaluacion::where('user_id',$user{'id'})
        ->where('estado_id','1')
        ->count();

        if ($terceros==0){
            return redirect('/terceros');    
        }
        elseif ($empresa==0){
            return redirect('/empresa');
        }
        elseif ($evaluacion==0) {
            return redirect('test/introduccion');            
        }
        else{
            return redirect('/test/test');            
        }

        //return view('home')->with('user',$user);
    }
}
