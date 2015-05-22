<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendances', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('day_attendance');
            $table->integer('assignment_id');
            $table->string('start_work_hour',7);
            $table->string('end_work_hour',7);
            $table->string('start_lunch_hour',7);
            $table->string('end_lunch_hour',7);
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
		Schema::drop('attendances');
	}

}
