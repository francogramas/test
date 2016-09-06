<?php

namespace test\Http\Controllers\general;
use Illuminate\Http\Request;

use test\Http\Requests;
use test\Http\Controllers\Controller;

use test\models\general\estados;

class estadosController extends Controller
{
    public function getEstados(Request $request, $id)
    {
        if ($request->ajax()){
            $estados=estados::estados($id);
            return response()->json($estados);
        }
    }
}
