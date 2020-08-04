<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/create','EmployeeController@create');
Route::get('/all','EmployeeController@getAll');
Route::delete('/delete/{id}','EmployeeController@delete');
Route::get('/update/{id}','EmployeeController@getEmployee');
Route::post('/update/{id}','EmployeeController@update');
