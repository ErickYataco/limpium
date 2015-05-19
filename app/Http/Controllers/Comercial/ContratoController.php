<?php namespace TORUSlimpium\Http\Controllers\Comercial;

use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;


use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Parameters;
use Input;

use Illuminate\Http\Request;

class ContratoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('comercial.contrato')->with('services', $services);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //$input = Input::all();
        //Contrato::create( $input );

        $numberPersons=Input::get('numberPersonsPost');
        $startContract=Input::get('startContractPost');
        $endContract=Input::get('endContractPost');
        $startWork=Input::get('startWorkPost');
        $endWork=Input::get('endWorkPost');
        $startLunch=Input::get('startLunchPost');
        $endLunch=Input::get('endLunchPost');

        foreach ($numberPersons as $key => $value) {

            $contrato= new Contract();
            $contrato->enterprise_id =Input::get('enterprise_id');
            $contrato->workplace_id = Input::get('workplace_id');
            $contrato->services_id = Input::get('service_id');

            $contrato->workers = $numberPersons[$key];
            $contrato->start_contract = $startContract[$key];
            $contrato->end_contract = $endContract[$key];
            $contrato->start_work =$startWork[$key] ;
            $contrato->end_work =$endWork[$key] ;
            $contrato->start_lunch =$startLunch[$key] ;
            $contrato->end_lunch =$endLunch[$key] ;
            $contrato->save();
        }
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');

        return view('comercial.contrato')->with('message', 'success')->with('services', $services);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

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