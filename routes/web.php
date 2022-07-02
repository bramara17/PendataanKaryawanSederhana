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

//Route::get('/','pagecontroller@home');
Route::get('/','StudentsController@index');
Route::get('/karyawan','StudentsController@indexdetail');
Route::get('/karyawan/create', 'StudentsController@create');
Route::post('/tambahkaryawan', 'StudentsController@store');
Route::get('/detailkaryawan/{kyn}','StudentsController@show');
Route::delete('/deletekaryawan/{a}','StudentsController@destroy');
Route::get('/editkaryawan/{kyn}','StudentsController@edit');
Route::patch('/updatekaryawan/{kyn}','StudentsController@update');
Route::get('/search', 'StudentsController@search');
//Route::get('/', function () {return view('welcome');});

