<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplacementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('replacements', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('assignment_id');
            $table->integer('replacer_person_id');
            $table->integer('replaced_person_id');
            $table->integer('type_cause');
            $table->date('start_replaced');
            $table->date('end_replaced');
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
		Schema::drop('replacements');
	}

}
