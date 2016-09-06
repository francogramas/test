<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class evaluacionrespuestas extends Model
{
	protected $table='evaluacionrespuestas';
	protected $primarykey='id';	
	protected $fillable=['id', 'evaluacion_id','respuesta_id'];


	public function evaluacion(){
		return $this -> hasmany(evaluacion::class);
	}

	public function respuesta(){
		return $this -> hasmany(respuesta::class);
	}

}
