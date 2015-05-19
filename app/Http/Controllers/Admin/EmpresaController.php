<?php namespace TORUSlimpium\Http\Controllers\Admin;


use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use TORUSlimpium\Models\Enterprise;
use Input;


use Illuminate\Http\Request;

class EmpresaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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

    public function find()
    {
        $term = Input::get('term');
        $search=Enterprise::where('name', 'LIKE', '%' .$term . '%')->get();

        foreach ($search as $result) {
            $enterprises[] = ['label'=>$result->name,'id'=>$result->id,'contact'=>$result->contact,
                                'mobile_phone'=>$result->mobile_phone,'office_phone'=>$result->office_phone,'email_contact'=>$result->email_contact];
        }

        return json_encode($enterprises);
    }
}

