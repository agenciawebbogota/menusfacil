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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('Dashboard');
Route::get('/menus', 'MenuController@index');
Route::post('/menus/crear', 'MenuController@create')->middleware('auth');
Route::PUT('/menus/actualizar', 'MenuController@update');
Route::PUT('/menus/actualizar/estado', 'MenuController@updateEstado')->middleware('auth');
Route::get('/descarga/menusCreados', 'MenuController@pdf')->middleware('auth');

// ->middleware('auth');
// Route::DELETE('/menus/eliminar/{id}', 'MenuController@delete')->middleware('auth');

