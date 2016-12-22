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

Route::auth();

Route::group(['middleware' => 'auth'], function() {

	Route::get('/home', 'HomeController@index');

	//TASKS
	Route::group(['prefix' => 'task'], function () {

		Route::get('/', ['uses' => 'TaskController@index', 'as' => 'task.index']);
		Route::get('show/{id}', ['uses' => 'TaskController@show', 'as' => 'task.show']);

		Route::get('create', ['uses' => 'TaskController@create', 'as' => 'task.create']);
		Route::post('create', ['uses' => 'TaskController@store', 'as' => 'task.store']);

		Route::get('edit/{id}', ['uses' => 'TaskController@edit', 'as' => 'task.edit']);
		Route::post('edit/{id}', ['uses' => 'TaskController@update', 'as' => 'task.update']);

		Route::delete('delete/{id}', ['uses' => 'TaskController@destroy', 'as' => 'task.delete']);

	});

});