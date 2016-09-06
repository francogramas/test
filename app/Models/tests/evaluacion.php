<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    protected $table='evaluacion';
	protected $primarykey='id';	
	protected $fillable=['id', 'estado_id','user_id'];


	public function evaluacionestado(){
		return $this -> hasmany(evaluacionestado::class);
	}

	public function users(){
		return $this -> hasmany(users::class);
	}

	public function evaluacionrespuestas(){
		return $this -> belongsto(evaluacionrespuestas::class);
	}
}
