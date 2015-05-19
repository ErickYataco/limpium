<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermissionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('permission_title'=>'operaciones_dasboard','permission_description'=>'operaciones_dasboard','permission_slug'=>'operaciones_dasboard'),
            array('permission_title'=>'operaciones_locales','permission_description'=>'operaciones_locales','permission_slug'=>'operaciones_locales'),
            array('permission_title'=>'operaciones_asignaciones','permission_description'=>'operaciones_asignaciones','permission_slug'=>'operaciones_asignaciones'),
            array('permission_title'=>'rrhh_persona','permission_description'=>'rrhh_persona','permission_slug'=>'rrhh_persona'),
            array('permission_title'=>'rrhh_persona_programacion','permission_description'=>'rrhh_persona_programacion','permission_slug'=>'rrhh_persona_programacion'),

        );

        \DB::table('permissions')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
