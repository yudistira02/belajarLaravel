<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('/biodata', function () {
    return  view('biodata', ["name" => 'ahmad raudhotul hikmah']);
});
// Route::get('ahmad', 'app\Http\Controllers\ahmadController@index');
//menampilkan data
Route::get('/pegawai', 'App\Http\Controllers\ahmadController@index');
//menambahkan data
Route::get('/pegawai/tambah', 'App\Http\Controllers\ahmadController@tambah');
Route::post('/pegawai/store', 'App\Http\Controllers\ahmadController@store');
//update data
Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\ahmadController@edit');
Route::post('/pegawai/update', 'App\Http\Controllers\ahmadController@update');
//hapus
Route::get('/pegawai/hapus/{id}', 'App\Http\Controllers\ahmadController@hapus');


Route::get('/formulir', 'App\Http\Controllers\ahmadController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\ahmadcontroller@proses');

Route::get('/blog', 'App\Http\Controllers\ahmadController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\ahmadController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\ahmadController@kontak');

Route::get('/crud', 'App\Http\Controllers\ahmadController@index');
