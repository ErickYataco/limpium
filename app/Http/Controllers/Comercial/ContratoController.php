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
        $monday=Input::get('monday');
        $tuesday=Input::get('tuesday');
        $wednesday=Input::get('wednesday');
        $friday=Input::get('friday');
        $saturday=Input::get('saturday');
        $sunday=Input::get('sunday');

        foreach ($numberPersons as $key => $value) {

            $contract= new Contract();
            $contract->enterprise_id =Input::get('enterprise_id');
            $contract->workplace_id = Input::get('workplace_id');
            $contract->service_id = Input::get('service_id');

            $contract->workers = $numberPersons[$key];
            $contract->start_contract =date("Y-m-d", strtotime($startContract[$key]));
            $contract->end_contract = date("Y-m-d", strtotime($endContract[$key]));
            $contract->start_work =$startWork[$key] ;
            $contract->end_work =$endWork[$key] ;
            $contract->start_lunch =$startLunch[$key] ;
            $contract->end_lunch =$endLunch[$key] ;
            $contract->monday =is_null($monday[$key])?0:1;
            $contract->tuesday =is_null($tuesday[$key])?0:1;
            $contract->wednesday =is_null($wednesday[$key])?0:1;
            $contract->thursday =is_null($tuesday[$key])?0:1;
            $contract->friday =is_null($friday[$key])?0:1;
            $contract->saturday =is_null($saturday[$key])?0:1;
            $contract->sunday =is_null($sunday[$key])?0:1;
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
