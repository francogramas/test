<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
	protected $table='categoria';
	protected $primarykey='id';	
	protected $fillable=['id', 'nombre'];


	// devuelbe la relacion del pais con el estado


	public function subcategoria(){
		return $this -> belongsto(subcategoria::class);
	}
}
