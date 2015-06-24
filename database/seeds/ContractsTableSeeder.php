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
            array('account_id'=>'1','workplace_id'=>'1','service_id'=>'1','workers'=>'10','start_work'=>'8:00 am','end_work'=>'5:00 pm',
                'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'1','workplace_id'=>'2','service_id'=>'1','workers'=>'5','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'2','workplace_id'=>'3','service_id'=>'1','workers'=>'5','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'2','workplace_id'=>'4','service_id'=>'1','workers'=>'7','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'3','workplace_id'=>'5','service_id'=>'1','workers'=>'6','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'3','workplace_id'=>'6','service_id'=>'1','workers'=>'4','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'4','workplace_id'=>'7','service_id'=>'1','workers'=>'4','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
			array('account_id'=>'4','workplace_id'=>'8','service_id'=>'1','workers'=>'4','start_work'=>'8:00 am','end_work'=>'5:00 pm',
				  'monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1',),
        );

        \DB::table('contracts')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
