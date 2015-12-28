<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('original_ot');
			$table->longText('description');
			$table->integer('type');
			$table->integer('region');
			$table->date('request_at');
			$table->date('start_at')->nullable();
			$table->integer('duration')->nullable();
			$table->date('finish_at')->nullable();
			$table->integer('requester_id');
			$table->longText('observation')->nullable();
			$table->integer('group_id')->nullable();
			$table->integer('car_id')->nullable();
			$table->integer('driver_user_id')->nullable();
			$table->integer('report_id')->nullable();
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
		Schema::drop('ots');
	}

}
