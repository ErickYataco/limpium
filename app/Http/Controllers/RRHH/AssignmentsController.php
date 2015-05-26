<?php namespace TORUSlimpium\Http\Controllers\RRHH;

use Illuminate\Support\Facades\Input;
use TORUSlimpium\Http\Requests;
use TORUSlimpium\Http\Controllers\Controller;

use Illuminate\Http\Request;
use TORUSlimpium\Models\Parameters;
use TORUSlimpium\Models\Contract;
use TORUSlimpium\Models\Assignment;

class AssignmentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');
        return view('rrhh.assignments')->with('departments',$departments)->with('services', $services);
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
        $assignments=Assignment::with('worker.attachments','attendance')->paginate(8);
        $contract=Contract::with('enterprise')->where('id',1)->first();
        $departments=array('' => '')+Parameters::where('group_id','dep')->lists('first_value', 'second_value');
        $services=array('' => '')+Parameters::where('group_id','ser')->lists('first_value', 'second_value');

        $days=array('' => '');

        if ($contract->monday==1){
            $days=$days+ array('1'=>'Lunes');
        }
        if ($contract->tuesday==1){
            $days=$days+ array('2'=>'Martes');
        }
        if ($contract->wednesday==1){
            $days=$days+ array('3'=>'Miercoles');
        }
        if ($contract->thursday==1){
            $days=$days+ array('4'=>'Jueves');
        }
        if ($contract->friday==1){
            $days=$days+ array('5'=>'Viernes');
        }
        if ($contract->saturday==1){
            $days=$days+ array('6'=>'Sabado');
        }
        if ($contract->sunday==1){
            $days=$days+ array('7'=>'Domingo');
        }

        return view('RRHH.assignments')->with('assignments',$assignments)->with('contract',$contract)->with('departments',$departments)
            ->with('services', $services)->with('contract', $contract)->with('days',$days);
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

    public function findWorkers()
    {
        $workers=DB::table('workers')
            ->leftjoin('assignments', function($join) use ($idusuario)
            {
                $join->on('assignments.worker_id', '=', 'workers.id');
                //$join->on('pronosticos.idusuario', '=', DB::raw($idusuario));
            })
            ->where('workers.department_id',Input::get('department_id'))
            ->where('workers.province_id',Input::get('province_id'))
            ->where('workers.district_id',Input::get('district_id'))
            ->paginate(5);



        return response()->json(view('operaciones.backupList', array('workers' => $workers))->render());
    }

    public function findRequirements()
    {

        $contracts=Contract::where('workplace_id',Input::get('workplace_id'))->where('service_id',Input::get('service_id'))->paginate(8);
        //$contracts = Worker::with('attachments')->paginate(8);

        return response()->json(view('RRHH.requirementsList', array('id'=>Input::get('workplace_id'),'contracts' => $contracts))->render());
    }


}
