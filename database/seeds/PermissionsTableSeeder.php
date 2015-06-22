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
            array('permission_title'=>'support_maps','permission_description'=>'support_maps','permission_slug'=>'support_maps'),
            array('permission_title'=>'support_dashboard','permission_description'=>'support_dashboard','permission_slug'=>'support_dashboard'),
            array('permission_title'=>'support_workplaces','permission_description'=>'support_workplaces','permission_slug'=>'support_workplaces'),
            array('permission_title'=>'support_backups','permission_description'=>'support_backups','permission_slug'=>'support_backups'),
            array('permission_title'=>'rrhh_worker_add','permission_description'=>'rrhh_worker_add','permission_slug'=>'rrhh_worker_add'),
            array('permission_title'=>'rrhh_worker_edit','permission_description'=>'rrhh_worker_edit','permission_slug'=>'rrhh_worker_edit'),
            array('permission_title'=>'rrhh_workers_photo_edit','permission_description'=>'rrhh_workers_photo_edit','permission_slug'=>'rrhh_workers_photo_edit'),
            array('permission_title'=>'rrhh_worker_edit','permission_description'=>'rrhh_worker_edit','permission_slug'=>'rrhh_worker_edit'),
            array('permission_title'=>'rrhh_workers_assignment_add','permission_description'=>'rrhh_workers_assignment_add','permission_slug'=>'rrhh_workers_assignment_add'),
            array('permission_title'=>'rrhh_contracts_add','permission_description'=>'rrhh_contracts_add','permission_slug'=>'rrhh_contracts_add'),
            array('permission_title'=>'admin_enterprises_add','permission_description'=>'admin_enterprises_add','permission_slug'=>'admin_enterprises_add'),
            array('permission_title'=>'rrhh_workplaces_add','permission_description'=>'rrhh_workplaces_add','permission_slug'=>'rrhh_workplaces_add'),
        );

        \DB::table('permissions')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
