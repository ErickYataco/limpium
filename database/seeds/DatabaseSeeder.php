<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		if ( App::environment() === 'dev' )
		{
			$this->call('EnterprisesTableSeeder');
			$this->call('PermissionsTableSeeder');
			$this->call('RolesTableSeeder');
			$this->call('PermissionsRolesTableSeeder');
			$this->call('WorkersTableSeeder');
			$this->call('UsersTableSeeder');
			$this->call('ParametersTableSeeder');
			$this->call('AccountsTableSeeder');
			$this->call('WorkplacesTableSeeder');
			$this->call('AssignmentsTableSeeder');
			$this->call('AttachmentsTableSeeder');
			$this->call('AttendancesTableSeeder');
			$this->call('ContractsTableSeeder');
		}
		elseif ( App::environment() === 'production' )
		{
			$this->call('EnterprisesTableSeeder');
			$this->call('PermissionsTableSeeder');
			$this->call('RolesTableSeeder');
			$this->call('PermissionsRolesTableSeeder');
			$this->call('UsersTableSeeder');
			$this->call('ParametersTableSeeder');
		}


	}

}
