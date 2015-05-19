<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('role_id'=>'1','worker_id'=>'1','name'=>'Admin','email'=>'admin@limpium.com','password'=>\Hash::make('limpium')),
            array('role_id'=>'2','worker_id'=>'2','name'=>'Vania ','email'=>'vania@limpium.com','password'=>\Hash::make('invitado')),
            array('role_id'=>'2','worker_id'=>'3','name'=>'Juan Perez','email'=>'juan.perez@limpium.com','password'=>\Hash::make('invitado')),
            array('role_id'=>'2','worker_id'=>'4','name'=>'Miguel Garcias','email'=>'miguel.garcia@limpium.com','password'=>\Hash::make('invitado')),
            array('role_id'=>'2','worker_id'=>'4','name'=>'Julio Vivanco','email'=>'julio.vivanco@limpium.com','password'=>\Hash::make('invitado')),
        );

        \DB::table('users')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
