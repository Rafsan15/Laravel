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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','UserController@index');

//Route::get('/profile/{id?}','UserController@profile');

Route::group(['prefix'=>'user'] ,function(){
    Route::get('/{id?}/show','UserController@profile');
    Route::get('/{id?}/edit','UserController@edit');
    Route::get('/home','UserController@home');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/home','AdminController@home');
    Route::get('{id?}/show','AdminController@profile');
    Route::get('{id?}/edit','AdminController@edit');
    Route::get('{id?}/delete','AdminController@delete');
});
