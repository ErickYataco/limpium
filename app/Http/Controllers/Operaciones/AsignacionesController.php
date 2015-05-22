<?php namespace TORUSlimpium\Http\Controllers\operaciones;

use Illuminate\Support\Facades\Input;
use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Assignment;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\Workplace;

class AsignacionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('operaciones.asignacion')->with('departments',$departments)->with('services', $services);
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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
//        $assignments=Assignment::with('worker.attachments','attendance')->get();
//        dd($assignments);
        $assignments=Assignment::with('worker.attachments','attendance')->paginate(8);
        $contract=Contract::with('enterprise')->where('id',1)->first();
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('operaciones.asignacion')->with('assignments',$assignments)->with('contract',$contract)->with('departments',$departments)
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

        return response()->json(view('operaciones.backupList', array('workers' => $workers))->render());
    }

    public function findRequirements()
    {

        $contracts=Contract::where('workplace_id',Input::get('workplace_id'))->where('service_id',Input::get('service_id'))->paginate(8);
        //$contracts = Worker::with('attachments')->paginate(8);

        return response()->json(view('operaciones.requirementsList', array('id'=>Input::get('workplace_id'),'contracts' => $contracts))->render());
    }

}
