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

// Home controller
Route::get('/', 'HomeController@index')->name('home');

// About controller
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/member', 'AboutController@member')->name('member');

// Agent controller
Route::get('/agent', 'AgentController@index')->name('agent');

// School controller
Route::get('/school', 'SchoolController@index')->name('school');

