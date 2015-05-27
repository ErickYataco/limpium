<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContractsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('enterprise_id'=>'1','workplace_id'=>'1','service_id'=>'1','workers'=>'10','start_work'=>'8:00 am','end_work'=>'5:00 pm',
                'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
        );

        \DB::table('contracts')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
