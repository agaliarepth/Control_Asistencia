<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\EmpleadoHorario;
use App\Models\Empleados;



class EmpleadoHorarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public  static function getHorariosEmpleado($id){



    }
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
	public function store(Request $request)
	{
        /*if($request->ajax()){
            $h=new EmpleadoHorario();
            $h->empleados_id=$request['empleado_id'];
            $h->horarios_id=$request['horario_id'];
            $h->save();
            return response()->json([
                "mensaje"=>"creado"]);
        }*/

        if($request->ajax()){
            $e=Empleados::find($request['empleado_id']);
            $e->horarios()->attach($request['horario_id']);
            
            return response()->json([
                "mensaje"=>"creado"]);
        }
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
