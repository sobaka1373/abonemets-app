<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('plans', 'App\Http\Controllers\API\PlanController@index');
Route::get('plans/{plans}', 'App\Http\Controllers\API\PlanController@show');
Route::post('plans', 'App\Http\Controllers\API\PlanController@store');
Route::put('plans/{plans}', 'App\Http\Controllers\API\PlanController@update');
Route::delete('plans/{plans}', 'App\Http\Controllers\API\PlanController@destroy');

Route::get('abonements', 'App\Http\Controllers\API\AbonementController@index');
Route::get('abonements/{abonements}', 'App\Http\Controllers\API\AbonementController@show');
Route::post('abonements', 'App\Http\Controllers\API\AbonementController@store');
Route::put('abonements/{abonements}', 'App\Http\Controllers\API\AbonementController@update');
Route::delete('abonements/{abonements}', 'App\Http\Controllers\API\AbonementController@destroy');
Route::get('abonements/check/{abonements}', 'App\Http\Controllers\API\AbonementController@check');
