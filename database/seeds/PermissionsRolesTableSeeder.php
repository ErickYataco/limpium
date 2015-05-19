<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermissionsRolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            //administrador
            array('role_id'=>'1','permission_id'=>'1'),
            array('role_id'=>'1','permission_id'=>'2'),
            array('role_id'=>'1','permission_id'=>'3'),
            array('role_id'=>'1','permission_id'=>'4'),
            array('role_id'=>'1','permission_id'=>'5'),
            //operaciones
            array('role_id'=>'2','permission_id'=>'1'),
            array('role_id'=>'2','permission_id'=>'2'),
            array('role_id'=>'2','permission_id'=>'3'),
            //rrhh
            array('role_id'=>'3','permission_id'=>'4'),
            array('role_id'=>'3','permission_id'=>'5'),
        );

        \DB::table('permission_role')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
