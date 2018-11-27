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

    Route::get('empleados', 'EmpleadoController@index')->name('empleados.index');
    
    Route::get('empleados/{empleado}/editar', 'EmpleadoController@edit')->name('empleados.edit');
    Route::put('empleados/{empleado}', 'EmpleadoController@update');
    
    Route::get('empleados/nuevo', 'EmpleadoController@create')->name('empleados.create');
    Route::post('empleados/crear', 'EmpleadoController@store')->name('empleados.store');
    
    Route::get('empleados/{empleado}/show', 'EmpleadoController@show')->name('empleados.show');
    
    Route::delete('empleados/{empleado}','EmpleadoController@destroy')->name('empleados.destroy');

    Route::get('ubicacion','UbicacionController@index');
    
    Route::get('empleados/generate-pdf', 'EmpleadoController@generatePDF')->name('empleados.generatepdf');
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


