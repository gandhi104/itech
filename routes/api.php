<?php

use Illuminate\Http\Request;
use App\Employee;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('emp','EmpController');
Route::get('emp', 'EmpController@index');
Route::get('emp/{id}', 'EmpController@show');
Route::post('emp', 'EmpController@store');
Route::put('emp/{id}', 'EmpController@update');
Route::delete('emp/{id}', 'EmpController@delete');