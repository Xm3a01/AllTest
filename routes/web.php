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
Auth::routes();

Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth'], function(){

    Route::get('/','dashboard\AdminController@firstPage')->name('dashboard.index');
    Route::resource('users','dashboard\AdminController');
    Route::resource('/products','dashboard\ItemController');
    Route::resource('/categories','dashboard\CategoryController');
    Route::resource('/subcategories','dashboard\Sub_CategoryController');

});

Route::get('/','Website\IndexController@index')->name('index');













//Localization Lang Setting
Route::get('locale/{locale}', 'LocaleController@index');