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

Route::get('/test', function(){
    Artisan::call('migrate');
    Artisan::call('db:seed');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // LOGIN
    Route::get('/', 'LoginController@index')->name('admin_login');
    Route::get('login', 'LoginController@formLogin')->name('login');
    Route::post('login', 'LoginController@login')->name('check_login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/top', 'TopController@index')->name('admin_top');

    Route::get('/gioi-thieu', 'IntroducesController@index')->name('introduces');
    Route::post('/save-gioi-thieu', 'IntroducesController@saveIntroduces')->name('save_introduces');
});