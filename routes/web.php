<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::group(['middleware'=>'auth'],function(){
	Route::get('/backend', function () {
	    return view('backend.dashboard');
	});
	Route::resource('/post','PostController');
});

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


//Frontend Routes
Route::get('/', 'FrontendController@index');
Route::get('/post_details/{id}', 'FrontendController@postDetails');
