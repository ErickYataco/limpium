<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('role_title'=>'Administrador'),
            array('role_title'=>'Central de Soporte'),
            array('role_title'=>'Recursos Humanos'),
            array('role_title'=>'Comercial'),
        );

        \DB::table('roles')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
