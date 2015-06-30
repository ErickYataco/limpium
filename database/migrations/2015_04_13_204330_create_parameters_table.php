<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parameters', function(Blueprint $table)
		{
            $table->char('group_id',3);
            $table->integer('code');
            $table->string('description',150);
            $table->string('first_value',50);
            $table->string('second_value',50);
            $table->primary(array('group_id', 'code'));

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('parameters');
	}

}
