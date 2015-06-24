<?php namespace TORUSlimpium\Http\Controllers\SupportCenter;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;
use TORUSlimpium\Models\Assignment;
use TORUSlimpium\Models\Contract;

use Illuminate\Http\Request;

class LocalesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contracts = Contract::with(array(
			'workplace.account',
			'assignmentsCount'
		))->get();

		$assignments=Assignment::with('worker.attachments','attendance')->where('contract_id',1)->paginate(8);
        return view('SupportCenter.locales')->with('assignments',$assignments)->with('contracts',$contracts);
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

}
