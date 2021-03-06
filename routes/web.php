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


Auth::routes();

Route::get('user/profile', 'UserProfileController@index')->name('user.profile');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/config','AppController@getAdminPage')->name('config')->middleware('roles:Admin|Author');//

Route::post('/config/assign-roles','AppController@postAdminAssingRoles')->name('config.assign');
