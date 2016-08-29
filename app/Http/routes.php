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

Route::get('index', ['uses' => 'TestController@index', 'as' => 'test.index']);
Route::get('show/{id}', ['uses' => 'TestController@show', 'as' => 'test.show']);

Route::get('create', ['uses' => 'TestController@create', 'as' => 'test.create']);
Route::post('create', ['uses' => 'TestController@store', 'as' => 'test.store']);

Route::get('edit/{id}', ['uses' => 'TestController@edit', 'as' => 'test.edit']);
Route::post('edit/{id}', ['uses' => 'TestController@update', 'as' => 'test.update']);

Route::post('delete/{id}', ['uses' => 'TestController@delete', 'as' => 'test.delete']);


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
Route::auth();

Route::get('/home', 'HomeController@index');
