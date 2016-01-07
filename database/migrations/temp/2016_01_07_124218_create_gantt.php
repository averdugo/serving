<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGantt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gantt', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('ot_id');
			$table->string('name');
			$table->string('group');
			$table->string('start_date');
			$table->string('duration');
			$table->boolean('open')->default(true);
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
		//
	}

}
