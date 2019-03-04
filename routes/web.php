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


Route::get('/', 'PagesController@home')->name('home');
Route::get('admission', 'PagesController@admission')->name('admission');
Route::get('result', 'PagesController@result')->name('result');
Route::post('result', 'PagesController@resultView')->name('result.view.front');
Route::get('teachers', 'PagesController@teachers')->name('teacher-list');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contact', 'PagesController@sendContact')->name('send.contact');
Route::get('about', 'PagesController@about')->name('about');
Route::get('post/{id}', 'PagesController@singlePost')->name('post.single');


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function() {

    Route::get('/', 'AdminController@dashboard')->name('admin');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::post('profile', 'AdminController@storeProfileDetails')->name('profile-store');

    Route::get('images', 'AdminController@mediaImages')->name('media.img');
    Route::get('videos', 'AdminController@mediaVideos')->name('media.videos');
    Route::get('upload', 'AdminController@uploadView')->name('upload.view');
    Route::post('upload', 'AdminController@upload')->name('upload');

    Route::get('notice-all', 'AdminController@noticeAll')->name('notice.all');
    Route::get('notice-new', 'AdminController@noticeNew')->name('notice.new');
    Route::post('notice-new', 'AdminController@noticeAdd')->name('notice.add');
    Route::get('notice-edit/{id}', 'AdminController@noticeEdit')->name('notice.edit');
    Route::post('notice-update/{id}', 'AdminController@noticeUpdate')->name('notice.update');
    Route::get('notice-delete/{id}', 'AdminController@noticeDelete')->name('notice.delete');

    Route::get('result', 'AdminController@resultView')->name('result.view');
    Route::post('result', 'AdminController@resultUpload')->name('result.upload');

    Route::get('teachers', 'AdminController@teachers')->name('teachers');
    Route::get('add-teacher', 'AdminController@addTeacher')->name('add-teacher');
    Route::post('add-teacher', 'AdminController@storeTeacher')->name('store-teacher');
    Route::get('edit-teacher/{id}', 'AdminController@editTeacher')->name('edit-teacher');
    Route::post('update-teacher/{id}', 'AdminController@updateTeacher')->name('update-teacher');
    Route::get('delete-teacher/{id}', 'AdminController@deleteTeacher')->name('delete-teacher');

    Route::get('institute', 'AdminController@institute')->name('institute');
    Route::post('institute', 'AdminController@option')->name('option');
});