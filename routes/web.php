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

Route::get('/about', function () {
    return view('about');
});

Route::get('/message/{msg?}', function ($msg='none') {
    return $msg;
});

Route::get('/hello', 'HelloController@index');

Route::get('/test/{params?}', 'HelloController@test');

Route::get('/hello/index', 'HelloController@hello_index');