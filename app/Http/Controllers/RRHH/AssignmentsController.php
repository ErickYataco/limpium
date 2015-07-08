<?php namespace TORUSlimpium\Http\Controllers\RRHH;

use Illuminate\Support\Facades\Input;
use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Assignment;

class AssignmentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$departments = array( '' => '' ) + Parameters::where('group_id', 'dep')->lists('first_value', 'second_value');
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');

		return view('RRHH.assignments')->with('departments', $departments)->with('services', $services);
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
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
		$assignments = Assignment::with('worker.attachments', 'attendance')->paginate(8);
		$contract    = Contract::with('account', 'workplace')->where('id', $id)->first();
		$departments = array( '' => '' ) + Parameters::where('group_id', 'dep')->lists('first_value', 'second_value');
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');

		$days = array( array( "day" => "Lunes", "attr" => $contract->monday == 1 ? "" : "readonly " ) );
		array_push($days, array( "day" => "Martes", "attr" => $contract->tuesday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Miercoles", "attr" => $contract->wednesday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Jueves", "attr" => $contract->thursday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Viernes", "attr" => $contract->friday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Sabados", "attr" => $contract->saturday == 1 ? "" : "readonly disabled " ));
		array_push($days, array( "day" => "Domingos", "attr" => $contract->sunday == 1 ? "" : 'readonly disabled ' ));

		return view('RRHH.assignments')->with('assignments', $assignments)->with('contract',
			$contract)->with('departments', $departments)->with('services', $services)->with('contract',
			$contract)->with('days', $days);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function findWorkers()
	{

		$day = explode(',', Input::get('days'));

		$workers = Worker::
		leftjoin('assignments', function ($join) use ($day)
		{
			$join->on('assignments.worker_id', '=', 'workers.id')
					->where('assignments.monday', '=',in_array('1', $day) ? 1 : 0)
					->where('assignments.tuesday', '=',in_array('2', $day) ? 1 : 0)
					->where('assignments.wednesday', '=',in_array('3', $day) ? 1 : 0)
					->where('assignments.thursday', '=',in_array('4', $day) ? 1 : 0)
					->where('assignments.friday', '=',in_array('5', $day) ? 1 : 0)
					->where('assignments.saturday', '=',in_array('6', $day) ? 1 : 0)
					->where('assignments.sunday', '=', in_array('7', $day) ? 1 : 0);


		})->with('attachments')->where('workers.department_id',
			Input::get('department_id'))->where('workers.province_id',
			Input::get('province_id'))->where('workers.district_id', Input::get('district_id'))->paginate(5);

		//dd($workers);

		return response()->json(view('RRHH.workersList', array( 'workers' => $workers ))->render());
	}


	public function findRequirements()
	{

		$contracts = Contract::where('workplace_id', Input::get('workplace_id'))->where('service_id',
			Input::get('service_id'))->paginate(8);

		//$contracts = Worker::with('attachments')->paginate(8);

		return response()->json(view('RRHH.requirementsList',
			array( 'id' => Input::get('workplace_id'), 'contracts' => $contracts ))->render());
	}


}
