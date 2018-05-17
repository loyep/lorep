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


Route::prefix('dashboard')->group(function (){

    Route::get('/', 'HomeController@dashboard')->name('dashboard');

    Route::get('permissions', 'Dashboard\PermissionsController@index');
});
