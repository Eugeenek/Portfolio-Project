<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about','AboutController@index');
Route::get('/contact','ContactController@index');


 

Route::group(['middleware' => 'checkrole:admin'], function () {
	Route::group(['namespace' => 'Admin'], function()
	{
		Route::group(['prefix' => 'admin'], function () {

		    Route::get('/dashboard','AdminController@index');
		    Route::resource('users','UsersController');
		});
		
		  // Controllers Within The "App\Http\Controllers\Admin" Namespace
	});
    
});

Route::auth();

Route::get('/home', 'HomeController@index');
