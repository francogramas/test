<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    protected $table='pregunta';
	protected $primarykey='id';	
	protected $fillable=['id', 'pregunta','subcategoria_id'];


	public function subcategoria(){
		return $this -> hasmany(subcategoria::class);
	}

	public function evaluacionrespuestas(){
		return $this -> belongsto(evaluacionrespuestas::class);
	}
}
