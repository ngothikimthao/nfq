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

Route::group(['prefix' => '/'], function () {		
	Route::get('index',[				
		'as'=>'index',			
		'uses'=>'PostController@get'			
		]);			
	Route::get('add',[
		'as'=>'add',
		'uses'=>'PostController@getAdd'
    ]);
    Route::post('add',[				
		'as'=>'add',			
		'uses'=>'PostController@postAdd'			
	]);	
	Route::get('update/{id}', [
		'as' 	=> 'update',
		'uses' 	=> 'PostController@getUpdate'
		]);
	Route::post('update/{id}', [
		'as' 	=> 'update',
		'uses' 	=> 'PostController@postUpdate'
	]);
	Route::get('delete/{id}', [
        'as' => 'delete',
        'uses' => 'PostController@delete'
        ]);
});
