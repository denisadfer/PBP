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

Route::get('/hw', function () {
    return view('helloworld');
});

Route::get('/chw', 'controllerku@fhw');

Route::get('/tampilbarang', 'controllerku@tampilBarang');

Route::get('/tambahbarang', function () {
    return view('tambahbarang');
});

Route::post('/proses_insert', 'controllerku@tambahBarang');

Route::get('/editbarang/{id}', 'controllerku@tampilEdit');

Route::post('/proses_edit', 'controllerku@editBarang');

Route::get('/proses_delete/{id}', 'controllerku@deleteBarang');