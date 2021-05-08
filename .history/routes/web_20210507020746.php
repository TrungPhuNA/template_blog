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
Route::group(['prefix' => 'youtube'], function (){
    Route::get('', 'YouTubeController@index')->name('get.youtube.index');
    Route::get('watch1', 'YouTubeController@watch1')->name('get.youtube.watch1');
    Route::get('list-video', 'YouTubeController@listVideo')->name('get.youtube.list_video');
});

Route::group(['prefix' => 'account' ,'namespace' => 'Auth'], function (){
    Route::get('login', 'LoginController@index')->name('get.login');
    Route::post('login', 'LoginController@postLogin')->name('get.login');

    Route::get('register', 'RegisterController@index')->name('get.register');
    Route::post('register', 'RegisterController@postRegister');

    Route::get('logout','LoginController@getLogout')->name('get.logout');
    Route::get('social/{drive}','SocialAuthController@redirect')->name('get.login_social');
    Route::get('/{social}/callback', 'SocialAuthController@callback')->name('get.login.social_callback');
    Route::post('/social','SocialController@callback')->name('post.social');
});

Route::get('', 'HomeController@index')->name('get.home');
    Route::get('trang-chu', 'HomeController@index')->name('get.home');
    Route::get('tim-kiem', 'SearchController@index')->name('get.search');

    Route::get('gioi-thieu', 'AboutController@index')
        ->name('get.about');
    Route::get('lien-he', 'ContactController@index')
        ->name('get.contact');

    Route::get('tai-lieu/{slug}','HubDataController@render')->name('get_document.render');



Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');