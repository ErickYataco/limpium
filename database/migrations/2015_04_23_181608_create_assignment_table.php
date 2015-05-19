<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignments', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('contract_id');
            $table->integer('workplace_id');
            $table->integer('worker_id');
            $table->boolean('monday');
            $table->boolean('tuesday');
            $table->boolean('wednesday');
            $table->boolean('thursday');
            $table->boolean('friday');
            $table->boolean('saturday');
            $table->boolean('sunday');
            $table->string('start_work_hour',7);
            $table->string('end_work_hour',7);
            $table->string('start_break_hour',7);
            $table->string('end_break_hour',7);
            $table->boolean('validity');
            $table->integer('type_assignment');
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
        Schema::drop('assignments');
	}

}
