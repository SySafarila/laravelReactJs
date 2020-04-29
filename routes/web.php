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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dashboard/profile', 'UserController@index')->name('profile');
Route::get('/dashboard/profile/edit', 'UserController@edit2')->name('profile.edit');
Route::patch('/dashboard/profile/update', 'UserController@update')->name('profile.update');
Route::delete('/dashboard/profile/delete', 'UserController@destroy')->name('profile.delete');