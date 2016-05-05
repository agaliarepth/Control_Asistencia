<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpleadoHorario extends Model {

    protected $table='empleados_horarios';
    protected $fillable=['empleados_id','horarios_id'];
    protected $hidden=[];



}
