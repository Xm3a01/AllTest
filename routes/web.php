<?php

//Localization Lang changing
Route::get('locale/{locale}', 'LocaleController@index');

Auth::routes();

Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth'], function(){

    Route::get('/','Dashboard\AdminController@firstPage')->name('dashboard.index');
    Route::resource('users','Dashboard\AdminController');
    Route::resource('/products','Dashboard\ItemController');
    Route::resource('/categories','Dashboard\CategoryController');
    Route::resource('/subcategories','Dashboard\Sub_CategoryController');

});

Route::get('/','Website\IndexController@index')->name('index');













