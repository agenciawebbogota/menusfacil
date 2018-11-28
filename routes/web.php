<?php
use Illuminate\Support\Facades\Mail;



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
Route::get('/carga', 'MenuController@carga');
Route::post('/cargafin', 'MenuController@cargafin');


Auth::routes();
//////Rutas del dashboard////////////
Route::get('/dashboard', 'HomeController@index')->name('Dashboard');
Route::get('/personaliza', 'HomeController@personaliza')->name('Dashboard');
// Ruta de facturación
Route::get('/admin/facturacion', 'HomeController@facturacion');
Route::get('/admin/crear-sucursal', 'HomeController@sucursal');
Route::post('/admin/crear-sucursal', 'HomeController@registro');
// Manejar la vista del usuario
Route::get('cliente/{url}', 'InicioController@index');
// documentación
Route::get('documentacion', 'InicioController@doc');


// Rutas de pedidos
Route::get('pedido/menus', 'PedidoController@getMenusDia');
Route::get('pedido/adicionales', 'PedidoController@getAdicionalesDia');
Route::get('/pedidos/pedidos', 'PedidoController@get');
Route::post('/pedidos/crear', 'PedidoController@create');
Route::get('/descarga/pedidos', 'PedidoController@pdf')->middleware('auth');

// Rutas de menús
Route::get('/menus/get', 'MenuController@index');
Route::post('/menus/crear', 'MenuController@create')->middleware('auth');
Route::PUT('/menus/actualizar', 'MenuController@update')->middleware('auth');
Route::PUT('/menus/actualizar/estado', 'MenuController@updateEstado')->middleware('auth');
Route::get('/descarga/menus', 'MenuController@pdf')->middleware('auth');
Route::get('/historico/menus/{url}', 'MenuController@historicomenus')->middleware('auth');

// Pruebas
// Route::get('/masvendido', 'InicioController@masvendido')->middleware('auth');



// Ordenes del día
Route::get('/admin/ordenes', function(){
    return view('admin.ordenes');
})->middleware('auth');


// Rutas del Super Usuario
Route::get('/superusuario', 'SuperusuarioController@index');
Route::get('/usuarios/get', 'SuperusuarioController@get');
Route::PUT('/usuarios/actualizardias', 'SuperusuarioController@actualizardias');
Route::PUT('/usuarios/actualizarUsuario', 'SuperusuarioController@updateUser');

// Pagos
Route::post('/confirmacion/confirmacion', 'PagoController@confirmacion');
Route::get('/confirmacion/respuesta', 'PagoController@respuesta');
// Route::get('/confirmacion/suscripcion-pendiente', 'PagosController@pendiente');

// Partnerts
Route::get('/registro/partnerts', 'PartnertController@indexpartnerts');
Route::post('/registro/partnerts', 'PartnertController@create');
Route::get('/partnerts/get', 'PartnertController@get');

// Confirmación de registro
Route::get('/confimacliente/{correo}/{id}', 'InicioController@confirmacion');
