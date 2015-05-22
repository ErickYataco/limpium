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
        $monday=Input::get('mondayPost');
        $tuesday=Input::get('tuesdayPost');
        $wednesday=Input::get('wednesdayPost');
        $friday=Input::get('fridayPost');
        $saturday=Input::get('saturdayPost');
        $sunday=Input::get('sundayPost');

        foreach ($numberPersons as $key => $value) {

            $contract= new Contract();
            $contract->enterprise_id =Input::get('enterprise_id');
            $contract->workplace_id = Input::get('workplace_id');
            $contract->service_id = Input::get('service_id');

            $contract->workers = $numberPersons[$key];
            $contract->start_contract = $startContract[$key];
            $contract->end_contract = $endContract[$key];
            $contract->start_work =$startWork[$key] ;
            $contract->end_work =$endWork[$key] ;
            $contract->start_lunch =$startLunch[$key] ;
            $contract->end_lunch =$endLunch[$key] ;
            $contract->monday =is_null($monday[$key])?false:true;
            $contract->tuesday =is_null($tuesday[$key])?false:true ;
            $contract->wednesday =is_null($wednesday[$key])?false:true ;
            $contract->thursday =is_null($tuesday[$key])?false:true ;
            $contract->friday =is_null($friday[$key])?false:true ;
            $contract->saturday =is_null($saturday[$key])?false:true ;
            $contract->sunday =is_null($sunday[$key])?false:true ;
            $contract->save();
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
