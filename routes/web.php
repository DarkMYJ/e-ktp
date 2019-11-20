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
Route::get('/reg-penduduk', 'AdminController@createPenduduk');
Route::post('/admin-page', 'AdminController@storePenduduk');


Route::get('/reg-ktp', 'AdminController@regKTP');
Route::post('/reg-ktp', 'AdminController@storeKTP');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
