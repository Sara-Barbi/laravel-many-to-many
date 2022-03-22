<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------------per api-------------

//Route::get('/posts',"Api\PostController@index");                                 //prefisso con api lo richiamo con api/posts


//---------------------per richiesta spefifica categoria 

//Route::get('/posts/category/{category}',"Api\PostController@index");        //NON E' MOLTO CORRETTO...prefisso con api lo richiamo con api/posts/category/2
