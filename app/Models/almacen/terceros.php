<?php namespace test\models\almacen;

use Illuminate\Database\Eloquent\Model;

class terceros extends Model {
	protected $table='terceros';
	protected $primarykey='id';

	protected $fillable=['id','apellido1','apellido2','nombres','nit','telefono','correo','ciudad','user_id'];

	public function ciudades(){
		return $this -> hasmany(ciudades::class);
	}

	public function users(){
		return $this -> hasmany(users::class);
	}
}
