<?php

namespace test\Http\Controllers\test1;

use Illuminate\Http\Request;

use test\Http\Requests;
use test\Http\Controllers\Controller;

class finalizadoController extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
    	return view('/test/finalizadoView');
    }
}
