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
Route::get('/','loginController@index')->name('login');
Route::post('/postlogin','loginController@postlogin');
Route::get('/logout','loginController@logout');
Route::group(['middleware' => 'auth'],function(){

    Route::get('/beranda','BerandaController@index');
    Route::get('/listdata','ListDataController@index');
    Route::get('/validasi','validasiController@index');
    Route::post('/validasi/data','validasiController@Data');
    Route::post('/listdata/create','ListDataController@create');
    Route::post('/listdata/{id}/update','ListDataController@update');
    Route::get('/listdata/{id}/edit','ListDataController@edit');
    Route::get('/listdata/{id}/delete','ListDataController@delete');
});

