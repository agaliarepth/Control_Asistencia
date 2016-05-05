<?php namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller {

	public function __construct(){

         $this->middleware('auth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{

          return  view('usuarios.usuarios');
	}


	public function listarUsuarios(){

	 
   if(\Request::ajax()){
	       $users=User::all();
           return  response()->json( $users->toArray());
     } 

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		
		if($request->ajax()){
		     $user=new  User();
             $user->name=$request['name'];
             $user->email=$request['email'];
             $user->password=\Hash::make($request['password']);

               $user->save();
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
	    $user=User::find($id);
	    return response()->json(
            
            $user->toArray()
	    	);  
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
       
       $user=User::find($id);
       $user->fill($request->all());
       $user->save();
       return response()->json([

          'mensaje'=>'listo'
       	]);


		  	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
        $user->delete();
		return response()->json(["mensaje"=>"borrado"]);
	}

}
