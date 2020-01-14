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
    Route::get('soukatu/goal/edit', 'SoukatuController@edit');
    Route::post('soukatu/goal/edit', 'SoukatuController@update');
    Route::get('soukatu/goal/delete', 'SoukatuController@delete');
    Route::get('soukatu/show', 'SoukatuController@show')->name('show');
    Route::get('soukatu/log', 'SoukatuController@log');
    Route::post('soukatu/log', 'SoukatuController@createlog');
    Route::get('soukatu/show/log', 'SoukatuController@show_log');
    Route::get('soukatu/check', 'SoukatuController@check');
    Route::post('soukatu/check', 'SoukatuController@createcheck');
    Route::get('soukatu/show/check', 'SoukatuController@show_check');
    Route::get('soukatu/user', 'SoukatuController@useredit');
    Route::post('soukatu/user', 'SoukatuController@userupdate');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
