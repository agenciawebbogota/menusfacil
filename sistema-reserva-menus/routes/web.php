<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/asd', function () {
    return view('welcome');
});

Route::get('/', 'PedidoController@index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('Dashboard');
Route::get('/menus', 'MenuController@index');
Route::post('/menus/crear', 'MenuController@create')->middleware('auth');
// ->middleware('auth');
Route::PUT('/menus/actualizar', 'MenuController@update')->middleware('auth');
Route::PUT('/menus/actualizar/estado', 'MenuController@updateEstado')->middleware('auth');
Route::get('/descarga/menus', 'MenuController@pdf')->middleware('auth');
// Implementar el guardado de los pedidos
Route::get('pedido/menus', 'PedidoController@getMenusDia');
Route::get('pedido/adicionales', 'PedidoController@getAdicionalesDia');
Route::get('pedidos/', 'PedidoController@get');
Route::post('/pedidos/crear', 'PedidoController@create');
// Route::post('pedido/crear', 'PedidoController@crearPedido');
// Route::DELETE('/menus/eliminar/{id}', 'MenuController@delete')->middleware('auth');

