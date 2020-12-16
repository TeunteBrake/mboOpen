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

Route::get('/', 'BanenController@indexHome')->name('webHome');
Route::post('/banen/reserveren/save', 'ReserveringController@saveWeb');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');

// Admin routes
Route::get('/admin/leden', 'LedenController@index')->middleware('auth')->name('leden');
Route::get('/admin/leden/create', 'LedenController@create')->middleware('auth');
Route::get('/admin/leden/save', 'LedenController@save')->middleware('auth');

Route::get('/admin/banen', 'BanenController@index')->middleware('auth')->name('banen');
Route::get('/admin/banen/create', 'BanenController@create')->middleware('auth');
Route::get('/admin/banen/save', 'BanenController@save')->middleware('auth');
Route::get('/admin/banen/{baan}/edit', 'BanenController@edit')->middleware('auth');
Route::post('/admin/banen/{baan}/update', 'BanenController@update')->middleware('auth');
Route::get('/admin/banen/{baan}/delete', 'BanenController@delete')->middleware('auth');

Route::get('/admin/reserveringen', 'ReserveringController@index')->middleware('auth')->name('reserveringen');
Route::get('/admin/reserveringen/create', 'ReserveringController@create')->middleware('auth');
Route::post('/admin/reserveringen/save', 'ReserveringController@save')->middleware('auth');
Route::get('/admin/reserveringen/{reservering}/edit', 'ReserveringController@edit')->middleware('auth');
Route::post('/admin/reserveringen/{reservering}/update', 'ReserveringController@update')->middleware('auth');
Route::get('/admin/reserveringen/{reservering}/delete', 'ReserveringController@delete')->middleware('auth');

