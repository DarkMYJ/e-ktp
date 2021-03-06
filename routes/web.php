<?php

use Illuminate\Http\Request;
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
Route::post('/', function (Request $request) {
    $name = $request->input('nik');

    $user = DB::table('cards')->where('cards_id', $name)->first();

    return view('welcome', ['user' => $user])->with('gagal', 'ssss');
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
Route::get('/ktp/{card}', 'AdminController@showKTP');
Route::delete('/ktp/{card}', 'AdminController@destroyKTP');
Route::get('/ktp/{card}/edit', 'AdminController@editKTP');
Route::patch('/ktp/{card}', 'AdminController@updateKTP');


/* I Still Dont Know What This Is*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
