<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/careerformSave', 'App\Http\Controllers\EmployeeController@store');
Route::get('/employeewisedata', 'App\Http\Controllers\EmployeeController@show');
Route::put('/employeewisedataupdate', 'App\Http\Controllers\EmployeeController@update');
Route::delete('/employeewisedatadelete', 'App\Http\Controllers\EmployeeController@destroy');
