<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AccountsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
			array('name'=>'Maestro','contact'=>'Ivan Martinez','mobile_phone'=>'987 777 321','office_phone'=>'555 3624','email_contact'=>'gerente1@maestro.com.pe'),
			array('name'=>'Cencosud','contact'=>'Juan Oropeza','mobile_phone'=>'995 297 987','office_phone'=>'789 6331','email_contact'=>'gerente_regional@cencosud.com.pe'),
			array('name'=>'Wong','contact'=>'Manuel Prada','mobile_phone'=>'995 297 987','office_phone'=>'365 5789','email_contact'=>'gerente_zonal@wong.com.pe'),
			array('name'=>'Paris','contact'=>'Joaquin Pezo','mobile_phone'=>'995 297 987','office_phone'=>'565 4000','email_contact'=>'joaquin.pezo@paris.com.pe'),
        );

        \DB::table('accounts')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
