<?php namespace TORUSlimpium\Http\Controllers\SupportCenter;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Enterprise;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Workplace;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$start_work_hour=date("H:i:s");
		dd($start_work_hour);*/

		$contracts = Contract::with(array(
			'workplace.account',
			'assignmentsCount'
		))->take(5)->get();

		//$contract = Contract::with(array(
		//	'workplace.account',
		//	'assignmentsCount' => function ($query)
		//	{
		//		$query->selectRaw('id, count(*) as aggregate')
		//			->groupBy('id');;
		//
		//	}
		//))->take(10)->get();

		//dd($contracts);

		$numberWorkers    = Worker::where('active', '=', '1')->count();
		$numberWorkplaces = Workplace::count();
		$enterprise       = Enterprise::find(1);

		return view('SupportCenter.dashboard')->with('enterprise', $enterprise)->with('numberWorkers',
			$numberWorkers)->with('numberWorkplaces', $numberWorkplaces)->with('contracts', $contracts);
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
