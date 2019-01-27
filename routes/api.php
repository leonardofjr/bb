<?php

use Illuminate\Http\Request;

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

Route::post('/gallery', 'GalleryController@create');
//Route::get('/gallery/{limit?}/{offset?}', 'GalleryController@readAll');
Route::get('/gallery/{id}', 'GalleryController@readById');
Route::put('/gallery/{id}', 'GalleryController@update');
Route::delete('/gallery/{id}', 'GalleryController@delete');

Route::post('/review', 'ReviewController@create');
Route::get('/reviews', 'ReviewController@readAll');
Route::get('/review/{id}', 'ReviewController@readById');
Route::put('/review/{id}', 'ReviewController@update');
Route::delete('/review/{id}', 'ReviewController@delete');

Route::get('/site', 'SiteController@readAll');
Route::post('/site', 'SiteController@create');