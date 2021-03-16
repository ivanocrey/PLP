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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::post('/lokasi/{id_lokasi}/update','LokasiController@updatejudul');
Route::get('/lokasi/{id_lokasi}/edit','LokasiDetail@edit');
Route::get('/lokasi', 'LokasiController@index')->name('lokasi');
Route::post('/lokasi', 'LokasiController@index');
Route::post('/lokasi/sub_lokasi1/create','LokasiController@create');
Route::post('/lokasi/sub_lokasi1/hasil','LokasiController@hasil');
Route::get('/lokasi/sub_lokasi1/{sub_id1}/edit','LokasiController@edit');
Route::post('/lokasi/sub_lokasi1/{sub_id1}/update','LokasiController@update');
Route::get('/lokasi/sub_lokasi1/{sub_id1}/delete','LokasiController@delete');
Route::resource('/lokasi/sub_lokasi1','LokasiController');
//lokasi 2
Route::post('/lokasi/sub_lokasi2/create','LokasiController2@create');
Route::post('/lokasi/sub_lokasi2/hasil','LokasiController2@hasil');
Route::get('/lokasi/sub_lokasi2/{sub_id2}/edit','LokasiController2@edit');
Route::post('/lokasi/sub_lokasi2/{sub_id2}/update','LokasiController2@update');
Route::get('/lokasi/sub_lokasi2/{sub_id2}/delete','LokasiController2@delete');
Route::resource('/lokasi/sub_lokasi2','LokasiController2');
//lokasi 3
Route::post('/lokasi/sub_lokasi3/create','LokasiController3@create');
Route::post('/lokasi/sub_lokasi3/hasil','LokasiController3@hasil');
Route::get('/lokasi/sub_lokasi3/{sub_id3}/edit','LokasiController3@edit');
Route::post('/lokasi/sub_lokasi3/{sub_id3}/update','LokasiController3@update');
Route::get('/lokasi/sub_lokasi3/{sub_id3}/delete','LokasiController3@delete');
Route::resource('/lokasi/sub_lokasi3','LokasiController3');

// demografi
Route::post('/demografi/umum/{id_lokasi}/update','LokasiDetail@update');
Route::get('/demografi/umum/{id_lokasi}/edit','LokasiDetail@edit');
Route::get('/demografi/umum/', 'UmumController@index')->name('lokasi');
Route::post('/demografi/umum/', 'UmumController@index');
Route::post('/demografi/umum/sub_lokasi1/create','UmumController@create');
Route::post('/demografi/umum/sub_lokasi1/hasil','UmumController@hasil');
Route::get('/demografi/umum/sub_lokasi1/{sub_id1}/edit','UmumController@edit');
Route::post('/demografi/umum/sub_lokasi1/{sub_id1}/update','UmumController@update');
Route::get('/demografi/umum/sub_lokasi1/{sub_id1}/delete','UmumController@delete');
Route::resource('/demografi/umum/sub_lokasi1','UmumController');
//umum
Route::post('/demografi/umum/sub_lokasi2/create','UmumController2@create');
Route::post('/demografi/umum/sub_lokasi2/hasil','UmumController2@hasil');
Route::get('/demografi/umum/sub_lokasi2/{sub_id2}/edit','UmumController2@edit');
Route::post('/demografi/umum/sub_lokasi2/{sub_id2}/update','UmumController2@update');
Route::get('/demografi/umum/sub_lokasi2/{sub_id2}/delete','UmumController2@delete');
Route::resource('/demografi/umum/sub_lokasi2','UmumController2');
//umum2
Route::post('/demografi/umum/sub_lokasi3/create','UmumController3@create');
Route::post('/demografi/umum/sub_lokasi3/hasil','UmumController3@hasil');
Route::get('/demografi/umum/sub_lokasi3/{sub_id3}/edit','UmumController3@edit');
Route::post('/demografi/umum/sub_lokasi3/{sub_id3}/update','UmumController3@update');
Route::get('/demografi/umum/sub_lokasi3/{sub_id3}/delete','UmumController3@delete');
Route::resource('/demografi/umum/sub_lokasi3','UmumController3');



Route::get('/grocery', 'GroceryController@index')->name('grocery');
Route::post('/grocery', 'GroceryController@index');

Route::get('/about', function () {
    return view('about');
})->name('about');

