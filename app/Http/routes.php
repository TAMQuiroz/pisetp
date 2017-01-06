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

	Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);

	//AJAX
	Route::group(['prefix' => 'ajax'], function () {	
		Route::get('checkNickname', ['uses' => 'UserController@checkNickname', 'as' => 'ajax.nickname']);
	});

	//ROLES
	Route::group(['prefix' => 'roles'], function () {	
		Route::get('/', ['uses' => 'RoleController@index', 'as' => 'role.index']);
		Route::get('{user}/edit', ['uses' => 'RoleController@edit', 'as' => 'role.edit']);
		Route::post('{user}/edit', ['uses' => 'RoleController@update', 'as' => 'role.update']);

		Route::delete('{user}/delete', ['uses' => 'RoleController@destroy', 'as' => 'role.delete']);
	});

	//USER
	Route::group(['prefix' => 'user'], function () {
		Route::get('/', ['uses' => 'UserController@index', 'as' => 'user.index']);
		Route::get('show/{user}', ['uses' => 'UserController@show', 'as' => 'user.show']);

		Route::get('{user}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
		Route::post('{user}/edit', ['uses' => 'UserController@update', 'as' => 'user.update']);
	});

	//TASKS
	Route::group(['prefix' => 'task'], function () {
		Route::get('/', ['uses' => 'TaskController@index', 'as' => 'task.index']);
		Route::get('show/{task}', ['uses' => 'TaskController@show', 'as' => 'task.show']);

		Route::get('create', ['uses' => 'TaskController@create', 'as' => 'task.create']);
		Route::post('create', ['uses' => 'TaskController@store', 'as' => 'task.store']);

		Route::get('{task}/edit', ['uses' => 'TaskController@edit', 'as' => 'task.edit']);
		Route::post('{task}/edit', ['uses' => 'TaskController@update', 'as' => 'task.update']);

		Route::delete('{task}/delete', ['uses' => 'TaskController@destroy', 'as' => 'task.delete']);

		Route::get('{task}/exportpdf', ['uses' => 'TaskController@exportpdf', 'as' => 'task.export.pdf']);
		Route::get('exportindexpdf/{user}', ['uses' => 'TaskController@exportindexpdf', 'as' => 'task.export.index.pdf']);
		Route::get('exportindexexcel/{user}', ['uses' => 'TaskController@exportindexexcel', 'as' => 'task.export.index.excel']);
		
		Route::get('exportpublicindexpdf', ['uses' => 'TaskController@exportpublicindexpdf', 'as' => 'task.export.public.index.pdf']);
		Route::get('exportpublicindexexcel', ['uses' => 'TaskController@exportpublicindexexcel', 'as' => 'task.export.public.index.excel']);
	});

	//FILES
	Route::group(['prefix' => 'file'], function () {

		Route::get('/{task}', ['uses' => 'FileController@index', 'as' => 'file.index']);
		Route::get('show/{id}', ['uses' => 'FileController@show', 'as' => 'file.show']);

		Route::get('create/{task}', ['uses' => 'FileController@create', 'as' => 'file.create']);
		Route::post('create/{task}', ['uses' => 'FileController@store', 'as' => 'file.store']);

		Route::get('{id}/edit', ['uses' => 'FileController@edit', 'as' => 'file.edit']);
		Route::post('{id}/edit', ['uses' => 'FileController@update', 'as' => 'file.update']);

		Route::delete('delete/{file}', ['uses' => 'FileController@destroy', 'as' => 'file.delete']);

	});

});