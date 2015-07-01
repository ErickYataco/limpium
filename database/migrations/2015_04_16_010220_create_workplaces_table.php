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
            $table->integer('account_id');
            $table->string('name',150);
            $table->string('address',150);
            $table->string('reference',150);
            $table->float('latitude');
            $table->float('longitude');
			$table->integer('department_id');
			$table->integer('province_id');
			$table->integer('district_id');
			$table->string('department');
			$table->string('province');
			$table->string('district');
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
