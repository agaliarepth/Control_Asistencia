<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model {

	protected $table='registros';
	protected $fillable=['tipo','empleados_id','atraso','hora','fecha','activo','lugares_id'];
	protected $hidden=[];

	public function lugares(){
		return $this->belongsTo('App\Models\Lugares');
	}

	public function empleados(){
		return $this->belongsTo('App\Models\Empleados');
	}
}
