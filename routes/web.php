<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')   //solo se utente è loggato
->namespace('Admin')        //route:list Api
->name('admin.')            //api.
->prefix('admin')           //posts
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');  // get( /, PostController@index)->name('index');
    Route::resource('/posts','PostController');             // get( /altro, PostController@index)->name('altro');
});

