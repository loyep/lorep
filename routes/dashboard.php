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

Route::prefix('dashboard')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    /* Menu */
    Route::get('menus', 'MenusController@index')->name('menus');

    /* Post */
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');

    /* Page */

    /* User */
    Route::get('users', 'UsersController@index')->name('admin.users.index');

    Route::get('profile', 'UsersController@profile')->name('admin.users.profile');

    /* Comment */
    Route::get('comments', 'CommentsController@index')->name('admin.comments.index');


    /* Documentation */
    Route::get('faq', 'HomeController@showFAQ')->name('admin.extra.faq');

    /* Search */
    Route::get('search', 'PostsController@search')->name('admin.search');

    /* Option */
    Route::get('options-general', 'OptionsController@showGeneral')->name('admin.options.general');
    Route::post('options-general', 'OptionsController@general');

    Route::get('options-writing', 'OptionsController@showWriting')->name('admin.options.writing');
    Route::post('options-writing', 'OptionsController@writing');

    Route::get('options-reading', 'OptionsController@showReading')->name('admin.options.reading');
    Route::post('options-reading', 'OptionsController@reading');

    Route::get('options-discussion', 'OptionsController@showDiscussion')->name('admin.options.discussion');
    Route::post('options-discussion', 'OptionsController@discussion');

    Route::get('options-media', 'OptionsController@showMedia')->name('admin.options.media');
    Route::post('options-media', 'OptionsController@media');

    Route::get('options-advance', 'OptionsController@showAdvance')->name('admin.options.advance');
    Route::post('options-advance', 'OptionsController@advance');

    /* Category */
    Route::get('category', 'CategoriesController@index')->name('admin.categories.index');

    /* Tag */
    Route::get('tag', 'TagsController@index')->name('admin.tags.index');
});
