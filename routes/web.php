<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/','almacen\almacenController@home');
Route::resource('/terceros','tercerosController');

// Buscar Producto
//Route::get('buscar/producto', 'almacen\productosController@autocomplete');
// End  Controladores de almacen
// Buscar Terceros
//Route::get('buscar/tercero', 'almacen\terceros@autocomplete');
// Empresa
Route::resource('/empresa','general\empresaController');

// ---------------------- Controladores generales
Route::resource('/pais','general\pais');
Route::get('/departamentos/{id}','general\estadosController@getEstados');
Route::get('/ciudades/{id}','general\ciudadesController@getCiudades');
//---------------------Introduccion al test
Route::resource('/test/introduccion','test1\introduccionController');
Route::resource('/test/prueba','test1\pruebaController');
Route::resource('/test/test','test1\testController');

Route::resource('/test/finalizado','test1\finalizadoController');



// --------------------------------------------------------------------------
Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/stats', function()
{
	return View::make('stats');
});

Route::get('/welcome', function()
{
	return View::make('welcome');
});


Route::get('/progressbars', function()
{
	return View::make('progressbars');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');