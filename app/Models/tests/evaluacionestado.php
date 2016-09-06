<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class evaluacionestado extends Model
{
    protected $table='evaluacionestado';
	protected $primarykey='evaluacionestado';	
	protected $fillable=['id', 'nombre'];

	public function evaluacion(){
		return $this -> belongsto(evaluacion::class);
	}
}
	