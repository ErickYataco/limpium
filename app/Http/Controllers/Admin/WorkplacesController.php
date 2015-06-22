<?php namespace TORUSlimpium\Http\Controllers\Admin;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Workplace;
use Input;

class WorkplacesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return view('Admin.workplaces');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        $workplace=new Workplace();
        $workplace->enterprise_id=Input::get('enterprise_id');
        $workplace->address=Input::get('address');
        $workplace->reference=Input::get('reference');
        $workplace->name=Input::get('local');
        $workplace->save();
        return view('Admin.workplaces');
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

    public function find()
    {
        $term = Input::get('data');
        $search=Workplace::where('enterprise_id', $term)->get();

        foreach ($search as $result) {
            $enterprises[] = ['id'=>$result->id,'text'=>$result->name];
        }

        return json_encode($enterprises);
    }

}
