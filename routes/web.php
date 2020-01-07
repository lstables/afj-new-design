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

Route::get('/', 'FrontController@index');
Route::get('tour', 'FrontController@tour');

Route::post('redactorUpload', 'NewsController@upload');


Route::get('about', 'FrontController@about');
Route::get('news', 'FrontController@news');
Route::get('news/article/{slug}', 'FrontController@article');

Route::get('reviews', 'ReviewsController@index');
Route::post('reviews', 'ReviewsController@store');
Route::any('reviews/reply/{id}', 'ReviewsController@addReply');

Route::post('mailing-list/join', 'FrontController@joinMailingList');
Route::get('contact', 'FrontController@contact');
Route::post('contact/send', 'FrontController@sendContact')->name('contact');

Route::get('videos', 'FrontController@videos');
Route::get('gallery', 'FrontController@gallery');
Route::get('gallery/2016', 'FrontController@old');
Route::get('gallery/2016/{location}', 'FrontController@oldLocation');
Route::get('gallery/{location}', 'FrontController@galleryLocation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('home');
    });
    Route::resource('tour', 'TourController');
    Route::resource('news', 'NewsController');
    Route::resource('video', 'VideoController');

    Route::get('gallery', 'GalleryController@index');
    Route::get('gallery/create', 'GalleryController@create');
    Route::get('gallery/edit/{id}', 'GalleryController@edit');
    Route::any('gallery/update/{id}', 'GalleryController@update');
    Route::post('gallery/store', ['as' => 'gallery_store', 'uses' => 'GalleryController@store']);
    Route::post('gallery/upload', ['as' => 'gallery_upload', 'uses' => 'GalleryController@upload']);

    Route::get('mailinglist', 'MailingListController@index');

    Route::group(['prefix' => 'mailing'], function () {
        Route::get('', 'MailingListController@@create');
    });
});

