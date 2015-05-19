<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WorkersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('dni'=>'41738129','job_title'=>'Administrador','email'=>'admin@limpium.com','first_name'=>'','first_last_name'=>'','second_last_name'=>''),
            array('dni'=>'41738125','job_title'=>'Lider Funcional','email'=>'vania@limpium.com','first_name'=>'','first_last_name'=>'','second_last_name'=>''),
            array('dni'=>'41738127','job_title'=>'operario','email'=>'juan.perez@limpium.com','first_name'=>'Juan','first_last_name'=>'Perez','second_last_name'=>'Martinez'),
            array('dni'=>'42020024','job_title'=>'operario','email'=>'miguel.garcia@limpium.com','first_name'=>'Miguel','first_last_name'=>'Garcia','second_last_name'=>'Martell'),
            array('dni'=>'41738155','job_title'=>'operario','email'=>'julio.vivanco@limpium.com','first_name'=>'Julio','first_last_name'=>'Vivanco','second_last_name'=>'Pacheco'),
        );

        \DB::table('workers')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
