<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workers', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('dni',8)->unique();
            $table->string('first_name',100);
            $table->string('second_name',100);
            $table->string('first_last_name',100);
            $table->string('second_last_name',100);
            $table->string('job_title',100);
            $table->integer('education_id');
            $table->integer('marital_status_id');
            $table->string('address',200);
            $table->string('district',200);
            $table->integer('department_id');
            $table->integer('province_id');
            $table->integer('district_id');
            $table->integer('zone_id');
            $table->string('full_address',300);
            $table->string('emergency_person',200);
            $table->string('emergency_phone',200);
            $table->integer('emergency_id');
            $table->string('mobile',20);
            $table->string('phone',14);
            $table->string('email')->unique();
            $table->date('birthdate');
            $table->integer('gender_id');
            $table->boolean('backup');
            $table->boolean('active');
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
        Schema::drop('workers');
	}

}

