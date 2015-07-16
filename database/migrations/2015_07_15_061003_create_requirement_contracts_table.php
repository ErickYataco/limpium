<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requirement_contracts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('account_id');
			$table->integer('workplace_id');
			$table->integer('contract_id');
			$table->integer('worker_type_id');
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
		Schema::drop('requirement_contracts');
	}

}
