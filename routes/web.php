<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// ** GET Routes ** //

// ** Home ** //
Route::get('/', ['as' => 'Home', 'uses' => 'PagesController@getHomepage']);

// ** About ** //
Route::get('about',  ['as' => 'About', 'uses' => 'PagesController@getAboutPage']);


// ** Services ** //
Route::get('/pricing',  ['as' => 'Pricing', 'uses' => 'PagesController@getPricingPage']);

// ** Work ** //
Route::get('/portfolio',  ['as' => 'Portfolio', 'uses' => 'PagesController@getPortfolioPage']);
  // ** Submenu/ ** //
    Route::prefix('portfolio')->group(function () {

    Route::get('/makeup',['as' => 'Makeup', 'uses' => 'PortfolioPagesController@getMakeupPage']);
    Route::get('/hair',['as' => 'Hair', 'uses' => 'PortfolioPagesController@getHairPage']);
    Route::get('/fashion',['as' => 'Fashion', 'uses' => 'PortfolioPagesController@getFashionPage']);
    });

// ** Testimonials ** //
Route::get('/testimonials',  ['as' => 'Testimonials', 'uses' => 'PagesController@getTestimonialsPage']);

Route::get('/leave-review',  ['as' => 'Leave Review', 'uses' => 'PagesController@getLeaveReviewPage']);

    
// ** Contact ** //
Route::get('/contact',  ['as' => 'Contact', 'uses' => 'PagesController@getContactPage']);

// ** POST Routes ** //

Route::post('/contact', 'FormsController@postContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');