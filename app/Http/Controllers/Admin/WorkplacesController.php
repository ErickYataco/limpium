<?php namespace TORUSlimpium\Http\Controllers\Admin;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Workplace;
use TORUSlimpium\Models\Parameters;
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
		$departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        return view('Admin.workplaces')->with('departments', $departments);
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
        $workplace->account_id=Input::get('account_id');
		$workplace->name=Input::get('local');
        $workplace->address=Input::get('address');
        $workplace->reference=Input::get('reference');
        $workplace->department=Input::get('department_text');
		$workplace->province=Input::get('province_text');
		$workplace->district=Input::get('district_text');
		$workplace->department_id=Input::get('department');
		$workplace->province_id=Input::get('province');
		$workplace->district_id=Input::get('district');

		$workplace->save();
        return redirect()->action('Admin\WorkplacesController@index');;
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
        $search=Workplace::where('account_id', $term)->get();

        foreach ($search as $result) {
            $enterprises[] = ['id'=>$result->id,'text'=>$result->name];
        }

        return json_encode($enterprises);
    }

}
