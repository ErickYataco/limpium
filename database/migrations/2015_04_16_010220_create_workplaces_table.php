<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkplacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('workplaces', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('enterprise_id');
            $table->string('name',150);
            $table->string('address',150);
            $table->string('reference',150);
            $table->string('latitude',150);
            $table->string('longitude',150);
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
        Schema::drop('workplaces');
	}

}
