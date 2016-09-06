<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class respuestas extends Model
{
    protected $table='respuestas';
	protected $primarykey='id';	
	protected $fillable=['id', 'pregunta_id','puntaje','nombre'];


	public function pregunta(){
		return $this -> hasmany(pregunta::class);
	}
}
