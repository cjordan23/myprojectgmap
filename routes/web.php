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

Route::get('/dashboard', 'HomeController@index');
Route::get('/admin','PagesController@admin');
Route::get('/admin/register','PagesController@adminRegistration');
Route::get('/statistic','PagesController@statistic');
Route::get('/workflow','PagesController@workflow');

