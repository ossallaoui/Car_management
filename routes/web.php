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


//get dashboard page

Route::get('/', [
    'uses'=>'HomeController@index',
	'as'=>'dashboard.index'
]);

Route::get('/dashboard', [
    'uses'=>'DashboardController@index',
	'as'=>'dashboard.index'
]);
//first way to create car controllers 
Route::resource('cars', 'CarController');


/*
//secound way to create car controllers
Route::get('/cars', [
    'uses'=>'carController@index',
	'as'=>'cars.index'
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
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
