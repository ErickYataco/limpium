<?php namespace TORUSlimpium\Http\Controllers\operaciones;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Assignment;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Worker;
use TORUSlimpium\Models\Parameters;

class AsignacionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $assignments=Assignment::all();
        /*$assignments=Assignment::all()->worker();
        dd($assignments);*/

        $contract=Contract::where('id',1)->first();
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        return view('operaciones.asignacion')->with('assignments',$assignments)->with('contract',$contract)->with('departments',$departments);
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
        $data = Worker::whereHas('assignments', function($q) use($id) {
            $q->where('workplace_id', '=', $id);
        })->get();
        dd($data);
        return view('operaciones.asignacion');
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
