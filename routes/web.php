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
    return view('index');
});

Route::group(['middleware'=>'auth.check'],function () {


    Route::get('/','clientesController@index');
    Route::get('/novo', 'clientesController@create');
    Route::post('/cadastrar', 'clientesController@store');
    Route::get('/visualizar/{id}', 'clientesController@show');
    Route::post('/atualizar/{id}', 'clientesController@update');
    Route::get('/delete/{id}', 'clientesController@destroy');




 });

Route::get('/homer', function(){

    return view(('home'));
});