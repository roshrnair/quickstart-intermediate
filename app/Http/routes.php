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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    
    Route::get('/home', 'HomeController@index');
    
    
    // Task Routes
    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    // Authentication Routes...
    Route::auth();
    
	/*
	 * Employee controller for routing
	 */    
    Route::get('/employees', 'EmployeeController@index');
    Route::get('/newemployee', 'EmployeeController@create');
    Route::post('/employee', 'EmployeeController@store');
    //Route::delete('/employee/{employee}', 'EmployeeController@destroy');
    Route::get('/employee/{employee}/edit', 'EmployeeController@edit');
    Route::post('/updateemployee', 'EmployeeController@update');
    
    Route::patch('/employee/{employee}/edit',[
    		'as' => 'employee.edit',
    		'uses' => 'EmployeeController@edit'
    ]);
    Route::delete('/employee/{employee}',[
    		'as' => 'employee.destroy',
    		'uses' => 'EmployeeController@destroy'
    ]);
    
});


	
