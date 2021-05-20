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
    return view('home');
}) ->name('home');

Route::get('/catalog', function () {
    return view('catalog');
}) ->name('catalog');

Route::view('/who', 'who')
        ->name('who');

Route::view('/how-to', 'how-to')
->name('how-to');

Route::view('/servicies', 'servicies')
        ->name('servicies');

Route::view('/policies', 'policies')
        ->name('policies');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
