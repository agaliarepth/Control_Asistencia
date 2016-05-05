<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model {

	protected $table='horarios';
	protected $fillable=['entrada','salida','descrip'];
	protected $hidden=[];

	public function empleados(){
		return $this->belongsToMany('App\Models\Empleados');
}
}