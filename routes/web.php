<?php

use App\Http\Controllers\CustomersController;
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

//Simple Routes
// Route::resource('customers', 'App\Http\Controllers\CustomersController');


//Rute tapi ribet gang
// //menampilkan semua data
Route::get('/customers', 'App\Http\Controllers\CustomersController@index');
//membuat dan menampilkan data
Route::get('/customers/create', 'App\Http\Controllers\CustomersController@create');
Route::get('/customers/{customers}', 'App\Http\Controllers\CustomersController@show');
//memasukkan data ke database
Route::post('/customers', 'App\Http\Controllers\CustomersController@store');
//Menghapus data
Route::delete('/customers/{customers}', 'App\Http\Controllers\CustomersController@destroy');
//mengedit data
Route::get('/customers/{customers}/edit', 'App\Http\Controllers\CustomersController@edit');
Route::patch('/customers/{customers}', 'App\Http\Controllers\CustomersController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
