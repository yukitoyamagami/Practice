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
Route::get('/', 'SoukatuController@about');
Route::group(['middleware' => 'auth'], function() {
    Route::get('soukatu/start', 'SoukatuController@start');
    Route::get('soukatu/goal', 'SoukatuController@goal');
    Route::post('soukatu/goal', 'SoukatuController@create');
    Route::get('soukatu/index', 'SoukatuController@index');
    Route::get('soukatu/log', 'SoukatuController@log');
    Route::post('soukatu/log', 'SoukatuController@createlog');
    Route::get('soukatu/activitylog', 'SoukatuController@activitylog');
    Route::get('soukatu/check', 'SoukatuController@check');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
