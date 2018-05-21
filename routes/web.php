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

    // NEWS
    Route::get('/tao-tin-tuc', 'NewsController@createNews')->name('form_news');
    Route::post('/tao-tin-tuc', 'NewsController@saveNews')->name('save_news');
    Route::get('/danh-sach-tin-tuc', 'NewsController@listNews')->name('list_news');
    Route::get('/sua-tin-tuc/{id}', 'NewsController@showEditNews')->name('show_edit_news');
    Route::post('/sua-tin-tuc', 'NewsController@editNews')->name('edit_news');
    Route::get('/xoa-tin-tuc/{id}', 'NewsController@deleteNews')->name('delete_news');

    // PRODUCTS
    Route::get('/tao-san-pham', 'ProductsController@createProducts')->name('form_products');
    Route::post('/tao-san-pham', 'ProductsController@saveProducts')->name('save_products');
    Route::get('/danh-sach-san-pham', 'ProductsController@listProducts')->name('list_products');
    Route::get('/sua-san-pham/{id}', 'ProductsController@showEditProducts')->name('show_edit_products');
    Route::post('/sua-san-pham', 'ProductsController@editProducts')->name('edit_products');
    Route::get('/xoa-san-pham/{id}', 'ProductsController@deleteProducts')->name('delete_products');

    // SLIDE
    Route::get('/tao-slide', 'SlidesController@createSlides')->name('create_slide');
    Route::post('/tao-slide', 'SlidesController@saveSlides')->name('save_slide');
    Route::get('/sua-slide/{id}', 'SlidesController@showEditSlide')->name('show_edit_slide');
    Route::post('/sua-slide', 'SlidesController@editSlide')->name('edit_slide');
    Route::get('/xoa-slide/{id}', 'SlidesController@deleteSlide')->name('delete_slide');
    Route::get('/danh-sach-slide', 'SlidesController@listSlides')->name('list_slide');

    //VIDEO
    Route::get('/tao-videos', 'VideosController@registerVideos')->name('register_videos');
    Route::post('/luu-videos', 'VideosController@saveVideos')->name('save_register_videos');
    Route::get('/danh-sach-videos', 'VideosController@listVideos')->name('list_videos');
    Route::get('/xoa-videos/{id}', 'VideosController@deleteVideos')->name('delete_videos');

});

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'TopController@index')->name('user_top');
    Route::get('menu', 'CookTableController@index')->name('menu');
    Route::get('tin-tuc', 'NewsController@index')->name('news');
});