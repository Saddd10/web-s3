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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', 'AdminController@index');
Route::get('/daftar_mhs', 'AdminController@read_mhs');
Route::get('/daftar_mhs/{id}/edit', 'AdminController@edit');
Route::get('/pendaftar', 'AdminController@read_pendaftar');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/skd1', 'MahasiswaController@daftar_skd1');
Route::get('/skd2', 'MahasiswaController@daftar_skd2');

Route::get('/nilai', 'DosenController@index');