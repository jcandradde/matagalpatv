<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){

    // RUTAS PARA LOS EMPLEADOS 

    // Lista en general
    Route::get('empleados', 'EmpleadoController@index')->name('empleados.index');
    
    // Para actualizar
    Route::get('empleados/{empleado}/editar', 'EmpleadoController@edit')->name('empleados.edit');
    Route::put('empleados/{empleado}', 'EmpleadoController@update');
    
    // Para crear
    Route::get('empleados/nuevo', 'EmpleadoController@create')->name('empleados.create');
    // Envia los datos del formulario
    Route::post('empleados/crear', 'EmpleadoController@store')->name('empleados.store');
    
    // Mostrar uno en especifico
    Route::get('empleados/{empleado}/show', 'EmpleadoController@show')->name('empleados.show');
    
    // Eliminar
    Route::delete('empleados/{empleado}','EmpleadoController@destroy')->name('empleados.destroy');

    // Generar reporte
    Route::get('empleados/generate-pdf', 'EmpleadoController@generatePDF')->name('empleados.generatepdf');

    // Route::get('ubicacion','UbicacionController@index');

    //----------------------------------------------------------------------------------------------------

    Route::get('equipos', '');
   
});

// Route::get('/contacto', function(){
//     return view('contacto');
// });

// Route::get('/hola/{id?}', function($id=null){
//    return "hola {$id}"; 
// });


Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getResgister');
Route::post('auth/register','Auth\AuthController@postResgister');
Auth::routes();


