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
            $table->integer('account_id');
            $table->integer('workplace_id');
            $table->integer('service_id');
            $table->dateTime('start_contract');
            $table->dateTime('end_contract');
            $table->integer('workers');
            $table->string('start_work');
            $table->string('end_work');
            $table->string('start_lunch');
            $table->string('end_lunch');
            $table->boolean('monday');
            $table->boolean('tuesday');
            $table->boolean('wednesday');
            $table->boolean('thursday');
            $table->boolean('friday');
            $table->boolean('saturday');
            $table->boolean('sunday');
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
