<?php namespace TORUSlimpium\Http\Controllers\RRHH;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;
use TORUSlimpium\Models\Parameters;
use Input;

use GrahamCampbell\Dropbox\Facades\Dropbox;
use Dropbox as dbx;
//use Intervention\Image\Image;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Attachment;

class PersonaController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $education=array('' => '')+Parameters::where('group_id','edu')->lists('first_value', 'second_value');
        $banks=array('' => '')+Parameters::where('group_id','ban')->lists('first_value','second_value');
        $marital_status=array('' => '')+Parameters::where('group_id','mar')->lists('first_value','second_value');
        $emergency=array('' => '')+Parameters::where('group_id','rel')->lists('first_value', 'second_value');
        $districts=array('' => '')+Parameters::where('group_id','dis')->lists('first_value', 'second_value');
        $provinces=array('' => '')+Parameters::where('group_id','pro')->lists('first_value', 'second_value');
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $job_title=array('' => '')+Parameters::where('group_id','job')->lists('first_value', 'second_value');

        return view('RRHH.person')->with('education', $education)->with('banks', $banks)->with('maritalStatus', $marital_status)
            ->with('emergency', $emergency)->with('departments', $departments)->with('provinces', $provinces)
            ->with('districts', $districts)
            ->with('job_title', $job_title);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function find()
    {
        //
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function findProvince()
    {
        $term = Input::get('data');

        $search=Parameters::where('group_id','pro')->where('second_value',$term)->get();

        $provinces[] = ['id'=>'','text'=>''];

        foreach ($search as $result) {
            $provinces[] = ['id'=>$result->code,'text'=>$result->first_value];
        }

        return json_encode($provinces);
    }

    public function findDistrict()
    {
        $term = Input::get('data');

        $search=Parameters::where('group_id','dis')->where('second_value',$term)->get();

        $districts[] = ['id'=>'','text'=>''];

        foreach ($search as $result) {
            $districts[] = ['id'=>$result->code,'text'=>$result->first_value];
        }

        return json_encode($districts);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function photo()
    {
        return view('RRHH.person_photo');
    }

    public function postPhoto()
    {
        return redirect('/rrhh/colaborador/foto/edit/'.Input::get('dni'));
    }

    public function editPhoto($dni)
    {
        //$dni = Input::get('dni');
        $worker=Worker::where('dni','=',$dni)->first();
        //dd($worker->id);

        $attachments=Attachment::where('worker_id',$worker->id)->photos()->get();

        $photoProfile= $attachments->filter(function($attachment)
        {
            if ($attachment->type== 1) {
                return true;
            }
        });

        $photoFace= $attachments->filter(function($attachment)
        {
            if ($attachment->type== 2) {
                return true;
            }
        });

        $urlProfile='';
        $urlFace='';
        if (count($photoProfile)>0){
            $urlProfile=$photoProfile->first()->url;
        }
        if (count($photoFace)>0){
            $urlFace=$photoFace->first()->url;
        }

        return view('RRHH.person_photo')->with('worker',$worker)->with('photoProfile',$urlProfile)->with('photoFace',$urlFace);
    }

    public function postUpload($id)
    {
        $file = Input::file('file');
        $intFile=fopen($file,"r");

        $worker=Worker::find($id);

        $attachment=Attachment::where('worker_id',$id)->profile()->get();

        if (count($attachment) > 0){
            Dropbox::uploadFile('/profile/'.$worker->dni.'_profile'.'.jpg',dbx\WriteMode::force(),$intFile);
            $url=Dropbox::createShareableLink('/profile/'.$worker->dni.'_profile'.'.jpg');

            $url=str_replace('www.dropbox.com','dl.dropboxusercontent.com',$url);
            $url=str_replace('?dl=0','',$url);

            $attachment=$attachment->first();
            $attachment->url= $url;
            $attachment->save();

            return response()->json(array('files'=>array('name'=>url($url.'?'.time()))), 200);
        }else{
            Dropbox::uploadFile('/profile/'.$worker->dni.'_profile'.'.jpg',dbx\WriteMode::add(),$intFile);
            $url=Dropbox::createShareableLink('/profile/'.$worker->dni.'_profile'.'.jpg');

            $url=str_replace('www.dropbox.com','dl.dropboxusercontent.com',$url);
            $url=str_replace('?dl=0','',$url);

            $attachment = new Attachment();
            $attachment->worker_id = $id;
            $attachment->path = '/profile/'.$worker->dni.'_profile'.'.jpg';
            $attachment->url= $url;
            $attachment->type= 1;
            $attachment->save();

            return response()->json(array('files'=>array('name'=>url($url.'?'.time()))), 200);

        }
        //dd($filesystem);
/*
        if( $upload_success ) {
            Image::open($destinationPath.'/'.$filename)->resize(null, 600, true)->save($destinationPath.'/'.$filename);
            return Response::json(array('files'=>array('name'=>url('https://dl.dropboxusercontent.com/s/07ras6x45vk7fjq/test2.jpg?dl=0'.'?'.time()))), 200);
        } else {
            return Response::json('error', 400);
        }*/
    }

    public function postProfileCrop($id)
    {
        //$id=4;
        $worker = Worker::find($id);

        $attachment=Attachment::where('worker_id',$id)->profile()->first();

        if (Input::get('w') != '' && Input::get('w') != 0) {

            Image::make($attachment->url)
                ->crop(intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')))
                ->save('upload/' . $worker->dni . '_cropped.jpg');

            $intFile = fopen('upload/' . $worker->dni . '_cropped.jpg', 'r');

            $attachment = Attachment::where('worker_id', $id)->face()->get();

            if (count($attachment) > 0) {
                Dropbox::uploadFile('/profile/' . $worker->dni . '_face' . '.jpg', dbx\WriteMode::force(), $intFile);
                $url = Dropbox::createShareableLink('/profile/' . $worker->dni . '_face' . '.jpg');

                $url = str_replace('www.dropbox.com', 'dl.dropboxusercontent.com', $url);
                $url = str_replace('?dl=0', '', $url);

                $attachment = $attachment->first();
                $attachment->url = $url;
                $attachment->save();

                return response()->json(array('files' => array('name' => url($url . '?' . time()))), 200);
            } else {
                Dropbox::uploadFile('/profile/' . $worker->dni . '_face' . '.jpg', dbx\WriteMode::add(), $intFile);
                $url = Dropbox::createShareableLink('/profile/' . $worker->dni . '_face' . '.jpg');

                $url = str_replace('www.dropbox.com', 'dl.dropboxusercontent.com', $url);
                $url = str_replace('?dl=0', '', $url);

                $attachment = new Attachment();
                $attachment->worker_id = $id;
                $attachment->path = '/profile/' . $worker->dni . '_face' . '.jpg';
                $attachment->url = $url;
                $attachment->type = 2;
                $attachment->save();

                return response()->json(array('files' => array('name' => url($url . '?' . time()))), 200);
            }
        }

    }

        /*Dropbox::uploadFile('/profile/'.$worker->dni.'_face.jpg',dbx\WriteMode::add(),$intFile);

        $url=Dropbox::createShareableLink('/profile/cropped.jpg');

        $url=str_replace('www.dropbox.com','dl.dropboxusercontent.com',$url);
        $url=str_replace('?dl=0','',$url);

        return response()->json(array('files'=>array('image'=>url($url.'?'.time()))), 200);*/

        /*
              Image::make('https://dl.dropboxusercontent.com/s/d3x5wjartiqcmtk/test.jpg?dl=0')
            ->crop(50,50,50,50)
            ->save('upload'.'/cropped.jpg');
              $intFile=fopen('upload'.'/cropped.jpg','r');

            Dropbox::uploadFile('/profile/cropped.jpg',dbx\WriteMode::add(),$intFile);

            $url=Dropbox::createShareableLink('/profile/cropped.jpg');

            $url=str_replace('www.dropbox.com','dl.dropboxusercontent.com',$url);
            $url=str_replace('?dl=0','',$url);

            //return response()->json(array('files'=>array('image'=>url($url.'?'.time()))), 200);
            return response()->json(array('image'=>url($url.'?'.time())), 200);*/

}
