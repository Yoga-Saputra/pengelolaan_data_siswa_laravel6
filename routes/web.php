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

/* Route::get('/', function () {
    return view('home');
}); */
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'siswa'], function() {
        Route::get('/', 'SiswaController@index');
        Route::post('/create', 'SiswaController@create');
        Route::get('/{id}/edit', 'SiswaController@edit');
        Route::post('/{id}/update', 'SiswaController@update');
        Route::get('/{id}/delete', 'SiswaController@delete');
    });
});


