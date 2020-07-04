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
Route::group(['middleware'=>'auth'],function(){
	Route::get('/backend', function () {
	    return view('backend.dashboard');
	});
	Route::resource('/post','PostController');
});
// Auth::routes(['register' => false]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Frontend Routes
Route::get('/', function () {
    return view('frontend.index');
});

