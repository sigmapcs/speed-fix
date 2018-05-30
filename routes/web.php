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
    // return view('welcome');
    return redirect('/login');
});

Route::get('/logut', function () {
    // return view('welcome');
    return redirect('/login');
});

Auth::routes();

Route::get('/user/{id}', 'userController@index')->name('user');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('clientes', 'CategoriasController@clientes')->name('cClientes');

Route::group(['prefix'=>'categorias'], function(){
    Route::get('clientes', 'CategoriasController@clientes')->name('cClientes');
    Route::get('clientes1', 'CategoriasController@clientes1')->name('cClientes1');
    Route::get('personal', 'CategoriasController@personal')->name('cPersonal');
    Route::get('personal1', 'CategoriasController@personal1')->name('cPersonal1');
    Route::get('productos', 'CategoriasController@productos')->name('cProductos');
    Route::get('productos1', 'CategoriasController@productos1')->name('cProductos1');
    Route::get('proveedores', 'CategoriasController@proveedores')->name('cProveedores');
    Route::get('proveedores1', 'CategoriasController@proveedores1')->name('cProveedores1');
    Route::get('servicios', 'CategoriasController@servicios')->name('cServicios');
    Route::get('servicios1', 'CategoriasController@servicios1')->name('cServicios1');
});

Route::group(['prefix'=>'clientes'], function()
{
    Route::get('/', 'clientesController@index')->name('clientes');
    Route::get('agregar','clientesController@add')->name('clientesadd');
    Route::get('borrar','clientesController@del')->name('clientesdel');
    Route::get('agregar','clientesController@edit')->name('clientesedit');
});


