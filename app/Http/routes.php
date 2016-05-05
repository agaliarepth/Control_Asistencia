<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'AdminController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

   Route::get('logout',['as'=>'logout','uses'=>'AdminController@logout']);

//RUTAS DE LA APLICACION

// 

    Route::get('/',['as'=>'admin','uses'=>'AdminController@index',]);



    Route::group(['prefix'=>'usuarios'],function(){
   
    Route::get('/','UsuariosController@index');
    Route::get('/listar','UsuariosController@listarUsuarios');
    Route::get('/edit/{id}','UsuariosController@edit');
    Route::get('/add','UsuariosController@create');
    Route::post('/create','UsuariosController@store');
    Route::get('/update/{id}','UsuariosController@update');
    Route::get('/delete/{id}','UsuariosController@destroy');                    
  
      });
 
    Route::group(['prefix'=>'horarios'],function(){
    Route::get('/','HorariosController@index');
    Route::get('/listar','HorariosController@listarHorarios');
    Route::get('/edit/{id}','HorariosController@edit');
    Route::get('/add','HorariosController@create');
    Route::post('/create','HorariosController@store');
    Route::get('/update/{id}','HorariosController@update');
    Route::get('/delete/{id}','HorariosController@destroy');

     });

    Route::group(['prefix'=>'empleados'],function(){
    Route::get('/','EmpleadosController@index');
    Route::get('/listar','EmpleadosController@listar');
    Route::get('/edit/{id}','EmpleadosController@edit');
    Route::get('/add','EmpleadosController@create');
    Route::post('/create','EmpleadosController@store');
    Route::get('/update/{id}','EmpleadosController@update');
    Route::get('/delete/{id}','EmpleadosController@destroy');
    Route::get('/autocompletar/','EmpleadosController@autocompletar');
    Route::get('/buscarHorarios/{id}','EmpleadosController@buscarHorarios');
    });
    Route::group(['prefix'=>'empleadoHorario'],function(){

    Route::post('/create','EmpleadoHorarioController@store');
    Route::get('/update/{id}','EmpleadoHorarioController@update');
    Route::get('/delete/{id}','EmpleadoHorarioController@destroy');
});



//RUTAS API USUARIOS 
Route::group(['prefix'=>'api'],function(){

    Route::group(['prefix'=>'usuarios'],function(){
        Route::resource('/','UsuariosController');
    });

});

