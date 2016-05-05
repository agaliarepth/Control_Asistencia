<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Horarios;

class HorariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public static function  getHorarios(){

          $h=Horarios::all();
            return $h;
      }


	public function index()
	{
		return view('horarios.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('horarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        if($request->ajax()){
            $h=new Horarios();
            $h->descrip=$request['descrip'];
            $h->entrada=$request['entrada'];
            $h->salida=$request['salida'];

            $h->save();
            return response()->json([
                "mensaje"=>"creado"]);
        }
	}
     public function listarHorarios(Request $request){

         if($request->ajax()){
             $h=Horarios::all();
             return  response()->json( $h->toArray());
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
        $horario=Horarios::find($id);
        return response()->json(

            $horario->toArray()
        );
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
