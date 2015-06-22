<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('backups', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('assignment_id');
            $table->integer('replacer_worker_id');
            $table->integer('replaced_worker_id');
            $table->date('day_backup');
            $table->integer('type_cause');
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
		Schema::drop('backups');
	}

}
