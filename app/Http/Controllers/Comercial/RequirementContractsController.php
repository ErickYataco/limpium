<?php namespace TORUSlimpium\Http\Controllers\Comercial;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;
use TORUSlimpium\Models\Assignment;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\RequirementContract;
use Illuminate\Http\Request;
use Input;

class RequirementContractsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$departments = array( '' => '' ) + Parameters::where('group_id', 'dep')->lists('first_value', 'second_value');
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');
		$workerType  = array( '' => '' ) + Parameters::where('group_id', 'job')->lists('first_value', 'second_value');
		return view('Comercial.RequirementContracts.requirements')->with('workerType', $workerType)->with('departments', $departments)->with('services', $services);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$requirementContract = array();
		$workerTypes         = Input::get('workerTypes');
		$id                  = Input::get('contract_id');
		$contract            = Contract::find($id);

		$monday    = Input::get('monday');
		$tuesday   = Input::get('tuesday');
		$wednesday = Input::get('wednesday');
		$thursday  = Input::get('thursday');
		$friday    = Input::get('friday');
		$saturday  = Input::get('saturday');
		$sunday    = Input::get('sunday');

		foreach ($workerTypes as $key => $value)
		{
			array_push($requirementContract, array(
				"account_id"       => $contract->account_id,
				"workplace_id"     => $contract->workplace_id,
				"contract_id"      => $contract->id,
				"worker_type_id"   => $contract->id,
				"monday"           => in_array($key + 1, is_null($monday) ? array() : $monday) ? 1 : 0,
				"tuesday"          => in_array($key + 1, is_null($tuesday) ? array() : $tuesday) ? 1 : 0,
				"wednesday"        => in_array($key + 1, is_null($wednesday) ? array() : $wednesday) ? 1 : 0,
				"thursday"         => in_array($key + 1, is_null($thursday) ? array() : $thursday) ? 1 : 0,
				"friday"           => in_array($key + 1, is_null($friday) ? array() : $friday) ? 1 : 0,
				"saturday"         => in_array($key + 1, is_null($saturday) ? array() : $saturday) ? 1 : 0,
				"sunday"           => in_array($key + 1, is_null($sunday) ? array() : $sunday) ? 1 : 0,
			));
		}

		RequirementContract::insert($requirementContract);
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
		$assignments = Assignment::with('worker.attachments', 'attendance')->paginate(8);
		$contract    = Contract::with('account', 'workplace')->where('id', $id)->first();
		$departments = array( '' => '' ) + Parameters::where('group_id', 'dep')->lists('first_value', 'second_value');
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');
		$workerType  = array( '' => '' ) + Parameters::where('group_id', 'job')->lists('first_value', 'second_value');

		$days = array( array( "day" => "Lunes", "attr" => $contract->monday == 1 ? "" : "readonly " ) );
		array_push($days, array( "day" => "Martes", "attr" => $contract->tuesday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Miercoles", "attr" => $contract->wednesday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Jueves", "attr" => $contract->thursday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Viernes", "attr" => $contract->friday == 1 ? "" : "readonly " ));
		array_push($days, array( "day" => "Sabados", "attr" => $contract->saturday == 1 ? "" : "readonly disabled " ));
		array_push($days, array( "day" => "Domingos", "attr" => $contract->sunday == 1 ? "" : 'readonly disabled ' ));

		return view('Comercial.RequirementContracts.requirements')->with('assignments', $assignments)->with('contract',
			$contract)->with('departments', $departments)->with('services', $services)->with('contract',
			$contract)->with('days', $days)->with('workerType', $workerType);
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

}
