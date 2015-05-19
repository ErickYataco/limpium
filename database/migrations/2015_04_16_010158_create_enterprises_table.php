<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('enterprises', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',150);
            $table->string('contact',150);
            $table->string('mobile_phone',20);
            $table->string('office_phone',14);
            $table->string('email_contact');
            $table->string('img',150);

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('enterprises');
	}

}
