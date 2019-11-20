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

Route::get('/admin-page', 'AdminController@index');

/* Penduduk Section*/
Route::get('/reg-penduduk', 'AdminController@createPenduduk');
Route::post('/admin-page', 'AdminController@storePenduduk');
Route::get('/penduduk/{citizen}', 'AdminController@showPenduduk');
Route::get('/penduduk/{citizen}/edit', 'AdminController@editPenduduk');
Route::delete('/penduduk/{citizen}', 'AdminController@destroyPenduduk');
Route::patch('/penduduk/{citizen}', 'AdminController@updatePenduduk');

/* KTP Section*/

Route::get('/reg-ktp', 'AdminController@regKTP');
Route::post('/reg-ktp', 'AdminController@storeKTP');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
