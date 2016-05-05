<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugares extends Model {

	protected $table='lugares';
	protected $fillable=['lugar'];
	protected $hidden=[];

	public function registros(){


		return $this->hasMany('App\Models\Lugares');
	}

}
