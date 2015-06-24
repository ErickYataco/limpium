<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WorkplacesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('account_id'=>'1' ,'name' =>'La Marina' ,'address'=>' calle 201' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
            array('account_id'=>'1' ,'name' =>'Santa Anita' ,'address'=>'calle 202' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
            array('account_id'=>'2' ,'name' =>'Canta Callao' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
            array('account_id'=>'2' ,'name' =>'Puente Piedra' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
			array('account_id'=>'3' ,'name' =>'San Miguel' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
			array('account_id'=>'3' ,'name' =>'San Isidro' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
			array('account_id'=>'4' ,'name' =>'Santiago de Surco' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),
			array('account_id'=>'4' ,'name' =>'Breña' ,'address'=>'calle 203' ,'reference'=>'Por Registrar' ,'latitude'=>'' ,'longitude'=>''),

        );

        \DB::table('workplaces')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
