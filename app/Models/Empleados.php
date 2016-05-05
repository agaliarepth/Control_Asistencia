<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{

    protected $table = 'empleados';
    protected  $fillable=['nombres','apellidos','direccion','cargo','qr'];
    protected  $hidden=[];

    
    public function  registros(){


    	return $this->hasMany('App\Models\Registros');
    }

    public function horarios(){

    	return $this->belongsToMany('App\Models\Horarios')->withTimestamps();
    }

}
