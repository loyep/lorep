<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

$dashboard_prefix = config('lorep.route.prefix');

Route::prefix($dashboard_prefix)->group(function () {

    /* Auth */
    Auth::routes();

    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');

    Route::get('/user-lock', 'Auth\LoginController@lock')->name('admin.users.lock');

    Route::post('/user-lock', 'Auth\LoginController@unlock');

});

Route::prefix($dashboard_prefix)->namespace('Dashboard')->name('admin.')->group(function () {

    /* Menu */
    Route::resource('menus', 'MenusController');

    /* Post */
    Route::resource('posts', 'PostsController');

    /* Page */

    /* User */
    Route::resource('users', 'UsersController');

    Route::get('profile', 'UsersController@profile')->name('users.profile');

    /* Comment */
    Route::resource('comments', 'CommentsController');


    /* Documentation */
    Route::get('faq', 'DashboardController@showFAQ')->name('extra.faq');
    Route::get('docs', 'DashboardController@showDocs')->name('extra.docs');

    /* Search */
    Route::get('search', 'PostsController@search')->name('search');

    /* Option */
    Route::get('options-general', 'OptionsController@showGeneral')->name('options.general');
    Route::post('options-general', 'OptionsController@general');

    Route::get('options-writing', 'OptionsController@showWriting')->name('options.writing');
    Route::post('options-writing', 'OptionsController@writing');

    Route::get('options-reading', 'OptionsController@showReading')->name('options.reading');
    Route::post('options-reading', 'OptionsController@reading');

    Route::get('options-discussion', 'OptionsController@showDiscussion')->name('options.discussion');
    Route::post('options-discussion', 'OptionsController@discussion');

    Route::get('options-media', 'OptionsController@showMedia')->name('options.media');
    Route::post('options-media', 'OptionsController@media');

    Route::get('options-advance', 'OptionsController@showAdvance')->name('options.advance');
    Route::post('options-advance', 'OptionsController@advance');

    /* Category */
    Route::resource('categories', 'CategoriesController');

    /* Tag */
    Route::resource('tags', 'TagsController');
});