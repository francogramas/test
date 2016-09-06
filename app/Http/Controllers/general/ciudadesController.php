<?php

namespace test\Http\Controllers\general;
use Illuminate\Http\Request;

use test\Http\Requests;
use test\Http\Controllers\Controller;

use test\models\general\ciudades;


class ciudadesController extends Controller
{
      public function getCiudades (Request $request, $id)
    {
        if ($request->ajax()){
            $ciudades=ciudades::ciudades($id);
            return response()->json($ciudades);
        }
    }
}
