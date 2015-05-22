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
            array('birthdate'=>'1969-05-12','dni'=>'41738300','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'Administrador','mobile'=>'(51) (1) 984-324-015','email'=>'admin@limpium.com','first_name'=>'Marisol','first_last_name'=>'Pelaez','second_last_name'=>'Aguirre'),
            array('birthdate'=>'1976-08-10','dni'=>'41738125','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'Lider Funcional','mobile'=>'(51) (1) 984-324-025','email'=>'vania@limpium.com','first_name'=>'Pilar','first_last_name'=>'Vasquez','second_last_name'=>'Martinez'),
            array('birthdate'=>'1987-09-06','dni'=>'41738127','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 984-324-005','email'=>'juan.perez@limpium.com','first_name'=>'Juan','first_last_name'=>'Perez','second_last_name'=>'Martinez'),
            array('birthdate'=>'1979-10-04','dni'=>'42020024','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 974-924-905','email'=>'miguel.garcia@limpium.com','first_name'=>'Miguel','first_last_name'=>'Garcia','second_last_name'=>'Martell'),
            array('birthdate'=>'1985-11-09','dni'=>'41738128','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 988-024-915','email'=>'julio.vivanco@limpium.com','first_name'=>'Julio','first_last_name'=>'Vivanco','second_last_name'=>'Pacheco'),
            array('birthdate'=>'1987-09-06','dni'=>'41738129','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 984-024-105','email'=>'carlos.perez@limpium.com','first_name'=>'Carlos','first_last_name'=>'Perez','second_last_name'=>'Martinez'),
            array('birthdate'=>'1979-10-04','dni'=>'41738130','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 974-384-908','email'=>'Martin.garcia@limpium.com','first_name'=>'Martin','first_last_name'=>'Galvez','second_last_name'=>'Marquez'),
            array('birthdate'=>'1985-11-09','dni'=>'41738131','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 964-344-907','email'=>'Alex.Meneses@limpium.com','first_name'=>'Alex','first_last_name'=>'Meneses','second_last_name'=>'Pacheco'),
            array('birthdate'=>'1987-09-06','dni'=>'41738132','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 988-784-906','email'=>'Maria.Pelaez@limpium.com','first_name'=>'Maria','first_last_name'=>'Pelaez','second_last_name'=>'Martinez'),
            array('birthdate'=>'1979-10-04','dni'=>'41738133','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 999-385-905','email'=>'Pilar.Montes@limpium.com','first_name'=>'Pilar','first_last_name'=>'Montes','second_last_name'=>'Barreto'),
            array('birthdate'=>'1985-11-09','dni'=>'41738134','department_id'=>'14','province_id'=>'127','district_id'=>'1257','full_address'=>'Lima, Lima, Jesus Maria,','job_title'=>'operario','mobile'=>'(51) (1) 966-348-904','email'=>'Juana.Balbuena@limpium.com','first_name'=>'Juana','first_last_name'=>'Tasayco','second_last_name'=>'Balbuena'),
            array('birthdate'=>'1987-09-06','dni'=>'41738135','department_id'=>'14','province_id'=>'127','district_id'=>'1261','full_address'=>'Lima, Lima, Lince, ','job_title'=>'operario','mobile'=>'(51) (1) 975-369-903','email'=>'Juana.Pacheco@limpium.com','first_name'=>'Juana','first_last_name'=>'Panduro','second_last_name'=>'Pacheco'),
            array('birthdate'=>'1979-10-04','dni'=>'41738136','department_id'=>'14','province_id'=>'127','district_id'=>'1261','full_address'=>'Lima, Lima, Lince, ','job_title'=>'operario','mobile'=>'(51) (1) 936-345-902','email'=>'Karen.Cayahua@limpium.com','first_name'=>'Karen','first_last_name'=>'Pachas','second_last_name'=>'Cayahua'),
            array('birthdate'=>'1985-11-09','dni'=>'41738137','department_id'=>'14','province_id'=>'127','district_id'=>'1261','full_address'=>'Lima, Lima, Lince, ','job_title'=>'operario','mobile'=>'(51) (1) 987-000-901','email'=>'Kimberling.vivanco@limpium.com','first_name'=>'Kimberling','first_last_name'=>'Timoteo','second_last_name'=>'Ico'),
        );

        \DB::table('workers')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
