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

Route::get('/cars', [
    'uses'=>'carController@index',
	'as'=>'cars.index'
]);

//get dashboard page

Route::get('/', [
    'uses'=>'DashboardController@index',
	'as'=>'dashboard.index'
]);



Route::get('/cars/create',[
	'uses'=>'carController@create',
	'as'=>'cars.create'
]);

Route::post('/cars',[
	'uses'=>'carController@store',
	'as'=>'cars.store'
]);

Route::get('/cars/{car}/edit',[
	'uses'=>'carController@edit',
	'as'=>'cars.edit'
]);

Route::post('/cars/{car}',[
	'uses'=>'carController@update',
	'as'=>'cars.update'
]);

Route::delete('/cars/{car}',[
	'uses'=>'carController@destroy',
	'as'=>'cars.delete'
]);