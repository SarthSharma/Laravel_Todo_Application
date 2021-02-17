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

Route::get('todos','App\http\controllers\TodosController@index');
Route::get('todos/{todo}','App\http\controllers\TodosController@show');
Route::get('new-todos','App\http\controllers\TodosController@create');
Route::post('store-todos','App\http\controllers\TodosController@store');
Route::get('todos/{todo}/edit','App\http\controllers\TodosController@edit');
Route::post('/todos/{todo}/update-todos','App\http\controllers\TodosController@update');
Route::get('todos/{todo}/delete','App\http\controllers\TodosController@delete');
Route::get('todos/{todo}/complete','App\http\controllers\TodosController@complete');