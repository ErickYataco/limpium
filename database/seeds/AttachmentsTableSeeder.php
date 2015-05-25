<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AttachmentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('worker_id'=>'3','path'=>'41738129','url'=>'https://dl.dropboxusercontent.com/s/8bvt79nsqwxmsmo/41738127_profile.jpg','type'=>'1'),
            array('worker_id'=>'3','path'=>'41738125','url'=>'https://dl.dropboxusercontent.com/s/4ipw317nc1tgkbj/41738127_face.jpg','type'=>'2'),
            array('worker_id'=>'4','path'=>'41738127','url'=>'https://dl.dropboxusercontent.com/s/ottepzokg2mppqz/42020024_profile.jpg','type'=>'1'),
            array('worker_id'=>'4','path'=>'42020024','url'=>'https://dl.dropboxusercontent.com/s/aoei05b2jjm1ddx/42020024_face.jpg','type'=>'2'),
            array('worker_id'=>'12','path'=>'41738135','url'=>'https://dl.dropboxusercontent.com/s/796qm4hujqnq1sh/41738135_profile.jpg','type'=>'1'),
            array('worker_id'=>'12','path'=>'41738130','url'=>'https://dl.dropboxusercontent.com/s/57dgo0k4l3k5xd5/41738135_face.jpg','type'=>'2'),
        );

        \DB::table('attachments')->insert($data);

        // $this->call('UserTableSeeder');
    }

}
