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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth'], function(){

    Route::get('/','AdminController@index')->name('dashboard.index');
    Route::get('/users','AdminController@index')->name('admin.index');
    Route::resource('/products','ItemController');
});


Route::post('/test','AdminController@comper');

Route::get('/te', function () {
    return view('test');
});