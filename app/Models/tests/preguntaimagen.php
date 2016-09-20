<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class preguntaimagen extends Model
{
    protected $table='preguntaimagen';	
	protected $fillable=['pregunta_id', 'imagen_id'];


	public function pregunta(){
		return $this -> hasmany(pregunta::class);
	}
}
