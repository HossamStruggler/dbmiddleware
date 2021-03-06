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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/supliers/index', 'SupliersController@index');
Route::post('/supliers', 'SupliersController@store');
Route::get('/supliers/create', 'SupliersController@create');
Route::get('/supliers/show/{suplier}', 'SupliersController@show');
Route::post('/supliers/update/{suplier}', 'SupliersController@update');

Route::delete('/supliers/delete/{suplier}', 'SupliersController@destroy');


Route::get('/connections/index', 'ConnectionsController@index');
Route::get('/connections/create', 'ConnectionsController@create');
Route::post('/connections', 'ConnectionsController@store');
Route::get('/connections/show/{connection}', 'ConnectionsController@show');
Route::delete('/connections/delete/{connection}', 'ConnectionsController@destroy');
Route::post('/connections/update/{connection}', 'ConnectionsController@update');