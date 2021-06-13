<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;

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

// Route::get('/', function () {
// return view('index');
// });

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');

//menampilkan semua data
Route::get('/customers', 'App\Http\Controllers\CustomersController@index');
//membuat dan menampilkan data
Route::get('/customers/create', 'App\Http\Controllers\CustomersController@create');
Route::get('/customers/{customers}', 'App\Http\Controllers\CustomersController@show');
//memasukkan data ke database
Route::post('/customers', 'App\Http\Controllers\CustomersController@store');
