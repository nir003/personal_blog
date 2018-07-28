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

Schema::defaultStringLength(191);

Route::get('/','PageController@getIndex');

Route::get('about','PageController@getAbout' );
Route::get('contact','PageController@getContact');





/*it can manage all the methods from controller*/
Route::resource('posts','PostController');


