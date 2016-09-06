<?php

namespace test\Models\general;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    //
	protected $table='empresa'; 
    protected $primarykey='id';	
	protected $fillable=['id', 'razonsocial', 'nit','ciudad','direccion','telefono','correo','user_id'];

	public function ciudades(){
		return $this -> hasmany(ciudades::class);
	}
	public function users(){
		return $this -> hasmany(users::class);
	}
}
