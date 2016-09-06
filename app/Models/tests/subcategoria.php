<?php

namespace test\Models\tests;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    protected $table='subcategoria';
	protected $primarykey='id';	
	protected $fillable=['id', 'nombre','categoria_id'];


	public function categoria(){
		return $this -> hasmany(categoria::class);
	}

	public function pregunta(){
		return $this -> belongsto(ciudades::class);
	}

}
