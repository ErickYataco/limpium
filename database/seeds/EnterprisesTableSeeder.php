<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EnterprisesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
			array('name'=>'Grupo Limpium','slogan'=>'Primero Las Personas','site'=>'www.grupolimpium.com'),
        );

        \DB::table('enterprises')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
