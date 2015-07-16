<?php namespace TORUSlimpium\Http\Controllers\Comercial;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use TORUSlimpium\Models\Account;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\Assignment;
use Input;

use Illuminate\Http\Request;

class ContractsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$column = array( '' => '', '1' => 'empresa','2' => 'ruc','3' => 'movil contacto','4' => 'fijo contacto')  ;
		$values= array( '' => '', '1' => 'name','2' => 'ruc','3' => 'mobile_phone','4' => 'office_phone')  ;

		$enterprises=null;

		if($request->get('column')!=""){
			$enterprises=Account::where($values[$request->get('column')],'LIKE','%'.$request->get('value').'%')->paginate(1);
			$enterprises->appends(Input::except('page'));
		}

		return view('Comercial.Contract.index', compact('column'), compact('enterprises') );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');
		$workerType    = array( '' => '' ) + Parameters::where('group_id', 'job')->lists('first_value', 'second_value');

		return view('Comercial.Contract.create', compact('services'),compact('workerType'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$numberPersons = Input::get('numberPersonsPost');
		$startContract = Input::get('startContractPost');
		$endContract   = Input::get('endContractPost');
		$startWork     = Input::get('startWorkPost');
		$endWork       = Input::get('endWorkPost');
		$startLunch    = Input::get('startLunchPost');
		$endLunch      = Input::get('endLunchPost');
		$monday        = Input::get('monday');
		$tuesday       = Input::get('tuesday');
		$wednesday     = Input::get('wednesday');
		$thursday		= Input::get('thursday');
		$friday        = Input::get('friday');
		$saturday      = Input::get('saturday');
		$sunday        = Input::get('sunday');

		foreach ($numberPersons as $key => $value)
		{

			$contract                = new Contract();
			$contract->enterprise_id = Input::get('enterprise_id');
			$contract->workplace_id  = Input::get('workplace_id');
			$contract->service_id    = Input::get('service_id');

			$contract->workers        = $numberPersons[$key];
			$contract->start_contract = date("Y-m-d", strtotime($startContract[$key]));
			$contract->end_contract   = date("Y-m-d", strtotime($endContract[$key]));
			$contract->start_work     = $startWork[$key];
			$contract->end_work       = $endWork[$key];
			$contract->start_lunch    = $startLunch[$key];
			$contract->end_lunch      = $endLunch[$key];
			$contract->monday         = is_null($monday[$key]) ? 0 : 1;
			$contract->tuesday        = is_null($tuesday[$key]) ? 0 : 1;
			$contract->wednesday      = is_null($wednesday[$key]) ? 0 : 1;
			$contract->thursday       = is_null($thursday[$key]) ? 0 : 1;
			$contract->friday         = is_null($friday[$key]) ? 0 : 1;
			$contract->saturday       = is_null($saturday[$key]) ? 0 : 1;
			$contract->sunday         = is_null($sunday[$key]) ? 0 : 1;
			$contract->save();
		}
		$services = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');

		return view('Comercial.contrato')->with('message', 'success')->with('services', $services);

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
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function scheduleRequirements($id)
	{

		$assignments = Assignment::with('worker.attachments', 'attendance')->paginate(8);
		$contract    = Contract::with('account', 'workplace')->where('id', $id)->first();
		$departments = array( '' => '' ) + Parameters::where('group_id', 'dep')->lists('first_value', 'second_value');
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');
		$workerType    = array( '' => '' ) + Parameters::where('group_id', 'job')->lists('first_value', 'second_value');

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
		$services    = array( '' => '' ) + Parameters::where('group_id', 'ser')->lists('first_value', 'second_value');
		$account=Account::find($id);
		return view('Comercial.Contract.edit' ,compact('services'),compact('account'));
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
