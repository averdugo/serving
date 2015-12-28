<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ot_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ot_id');
			$table->integer('detail_type')->nullable();
			$table->string('clasificacion')->nullable();
			$table->integer('detail_status')->nullable();
			$table->integer('ingdt_user_id')->nullable();
			$table->string('dpr')->nullable();
			$table->string('seguimiento')->nullable();
			$table->integer('jefedegrupo_user_id')->nullable();
			$table->mediumText('materials')->nullable();
			$table->integer('rendir')->nullable();
			$table->integer('allowance_id')->nullable();
			
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
		Schema::drop('ot_details');
	}

}
