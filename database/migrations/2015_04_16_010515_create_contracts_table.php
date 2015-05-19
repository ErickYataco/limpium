<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('contracts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('enterprise_id');
            $table->integer('workplace_id');
            $table->integer('services_id');
            $table->dateTime('start_contract');
            $table->dateTime('end_contract');
            $table->integer('workers');
            $table->string('start_work');
            $table->string('end_work');
            $table->string('start_lunch');
            $table->string('end_lunch');
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
        Schema::drop('contracts');
	}

}
