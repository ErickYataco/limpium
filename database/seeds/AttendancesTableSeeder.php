<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AttendancesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'1','start_work_hour'=>'7:00','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'2','start_work_hour'=>'7:30','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'3','start_work_hour'=>'6:55','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'4','start_work_hour'=>'7:10','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'5','start_work_hour'=>'7:08','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'6','start_work_hour'=>'7:15','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'7','start_work_hour'=>'6:45','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'8','start_work_hour'=>'7:01','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'9','start_work_hour'=>'7:20','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'10','start_work_hour'=>'7:30','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s",strtotime('-1 day'.date("Y-m-d H:i:s"))),'assignment_id'=>'11','start_work_hour'=>'8:00','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),

            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'1','start_work_hour'=>'7:00','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'2','start_work_hour'=>'7:30','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'3','start_work_hour'=>'6:55','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            /*array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'4','start_work_hour'=>'7:10','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),*/
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'5','start_work_hour'=>'7:08','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'6','start_work_hour'=>'7:15','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'7','start_work_hour'=>'6:45','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'8','start_work_hour'=>'7:01','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'9','start_work_hour'=>'7:20','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'10','start_work_hour'=>'7:30','end_work_hour'=>'2','start_lunch_hour'=>'1','end_lunch_hour'=>'1'),
            array('day_attendance'=>date("Y-m-d H:i:s"),'assignment_id'=>'11','start_work_hour'=>'8:00','end_work_hour'=>'1','start_lunch_hour'=>'1','end_lunch_hour'=>'1')


        );

        \DB::table('attendances')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
