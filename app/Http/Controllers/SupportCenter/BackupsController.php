<?php namespace TORUSlimpium\Http\Controllers\SupportCenter;

use Illuminate\Support\Facades\Input;
use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Assignment;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\Workplace;

class BackupsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('SupportCenter.asignacion')->with('departments',$departments)->with('services', $services);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//


        $assignment=Assignment::find(Input::get('assignment_id'));
        $id=$assignment->contract_id;

        $new_assignment=new Assignment();
        $new_assignment->contract_id=$assignment->contract_id;
        $new_assignment->workplace_id=$assignment->workplace_id;
        $new_assignment->worker_id=Input::get('replacer_worker_id');
        $new_assignment->monday=$assignment->monday;
        $new_assignment->tuesday=$assignment->tuesday;
        $new_assignment->wednesday=$assignment->wednesday;
        $new_assignment->thursday=$assignment->thursday;
        $new_assignment->friday=$assignment->friday;
        $new_assignment->saturday=$assignment->saturday;
        $new_assignment->sunday=$assignment->sunday;
        $new_assignment->start_work_hour=$assignment->start_work_hour;
        $new_assignment->end_work_hour=$assignment->end_work_hour;
        $new_assignment->start_break_hour=$assignment->start_break_hour;
        $new_assignment->end_break_hour=$assignment->end_break_hour;
        $new_assignment->type_assignment=2;
        $new_assignment->save();

        $assignment->type_assignment=3;
        $assignment->save();

       return redirect('soporte/backups/requerimiento/'.$id);
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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
       //$assignments=Assignment::with('worker.attachments','attendance')->where('contract_id',$id)->get();
       //dd($assignments);
		$assignments=Assignment::with('worker.attachments','attendance')->where('contract_id',$id)->paginate(8);
        //$assignments=Assignment::with('worker.attachments','attendance')->where('contract_id',$id)->orderBy('type_assignment','desc')->paginate(8);
		//$assignments=Assignment::with('worker.attachments','attendance')->where('contract_id',$id)->orderBy('type_assignment','desc')->get();
		//dd($assignments);
        $contract=Contract::with('account','workplace')->where('id',$id)->first();
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('SupportCenter.asignacion')->with('assignments',$assignments)->with('contract',$contract)->with('departments',$departments)
                ->with('services', $services)->with('contract', $contract);
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

    public function findBackups()
    {
        $workers = Worker::with('attachments')->where('department_id',Input::get('department_id'))
            ->where('province_id',Input::get('province_id'))->where('district_id',Input::get('district_id'))->paginate(5);

        return response()->json(view('SupportCenter.backupList', array('workers' => $workers))->render());
    }

    public function findRequirements()
    {

        $contracts=Contract::where('workplace_id',Input::get('workplace_id'))->where('service_id',Input::get('service_id'))->paginate(8);
        //$contracts = Worker::with('attachments')->paginate(8);

        return response()->json(view('SupportCenter.requirementsList', array('id'=>Input::get('workplace_id'),'contracts' => $contracts))->render());
    }

}
