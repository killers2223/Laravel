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


Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');


Route::resource('movie','MovieController');


Route::get('prueba',function(){
return  "Hola desde route.php,,,,, en este caso desde web.php";	
});

Route::get('nombre/{nombre}',function($nombre){
return "EL NOMBRE DE MIAUSI ES ".$nombre;
});


Route::get('/', function () {
    return view('welcome');
});
