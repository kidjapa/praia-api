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


    Route::post('/items/add','ItemController@addItem')->name('main.item.add');
    Route::post('/items/delete','ItemController@delete')->name('main.item.add');
    Route::get('/items/get','ItemController@getItems')->name('main.item.get');

});
