<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('tipo');
			$table->integer('empleados_id')->unsigned();
			$table->foreign('empleados_id')->references('id')->on('empleados');
			$table->integer('lugares_id')->unsigned();
			$table->foreign('lugares_id')->references('id')->on('lugares');
			$table->boolean('atraso');
			$table->boolean('activo');
			$table->time('hora');
			$table->date('fecha');
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
		Schema::drop('registros');
	}

}
