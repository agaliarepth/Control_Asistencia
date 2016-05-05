<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->time('entrada');
			$table->time('salida');
			$table->string('descrip');
		});

        Schema::create('empleado_horario',function (Blueprint $table){

            $table->integer("empleado_id")->unsigned()->index();
            $table->foreign("empleado_id")->references('id')->on('empleados')->onDelete('cascade');
            $table->integer("horario_id")->unsigned()->index();
            $table->foreign("horario_id")->references('id')->on('horarios')->onDelete('cascade');

            $table->timestamps();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horarios');
        Schema::drop('empleado_horario');
	}

}
