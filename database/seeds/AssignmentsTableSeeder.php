<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AssignmentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data=array(
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'3','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 am','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'4','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'5','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'6','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'7','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'8','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'9','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'10','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'11','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            /*array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'12','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),
            array('contract_id' =>'1','workplace_id'=>'1','worker_id'=>'13','monday'=>'1','tuesday'=>'1','wednesday'=>'1','thursday'=>'1','friday'=>'1','saturday'=>'1',
                'sunday'=>'','start_work_hour'=>'7:00 am','end_work_hour'=>'5:00 pm','start_break_hour'=>'12:00 pm','end_break_hour'=>'1:00pm','validity'=>'1','type_assignment'=>'1',),*/
        );

        \DB::table('assignments')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
