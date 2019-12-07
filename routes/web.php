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

Route::group(['prefix' => 'main', 'as' => 'admin.'], function () {


    // Route api Items
    Route::post('/items/add','ItemController@addItem')->name('main.item.add');
    Route::post('/items/delete','ItemController@delete')->name('main.item.delete');
    Route::post('/items/bought','ItemController@boughtItem')->name('main.item.bought');
    Route::get('/items/get','ItemController@getItems')->name('main.item.get');

    // Routes for Lista Dias
    Route::get('/dias/get','DiasPessoasController@getDaysValues')->name('main.dias.get');
    Route::post('/dias/setdaypeople','DiasPessoasController@setDayPeople')->name('main.dias.setday');
    Route::get('/dias/getDefaultValues','DiasPessoasController@getDefaultValues')->name('main.dias.getdefaultvalues');

});
