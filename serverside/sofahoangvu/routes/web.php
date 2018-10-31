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

Route::group(['middleware' => 'locale'], function() {
    
    // change language    
    Route::get('language/{language}', 'HomeController@changeLanguage')
        ->name('user.change-language');


    Route::get('/', 'HomeController@index');
        
    Route::resource('product', 'ProductController');
    

});


