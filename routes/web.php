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
//     return view('welcome');
// });

Route::get('/', 'HomepageController@index');
Route::get('/sejarah', 'HomepageController@sejarah');
Route::get('/visimisi', 'HomepageController@visimisi');
Route::get('/tujuan', 'HomepageController@tujuan');
Route::get('/prestasi', 'HomepageController@prestasi');
Route::get('/ekstrakurikuler', 'HomepageController@ekstrakurikuler');
Route::get('/perpisahan', 'HomepageController@perpisahan');
