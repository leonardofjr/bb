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
Route::get('/services',  ['as' => 'Services', 'uses' => 'PagesController@getServicesPage']);
    // ** Submenu/ ** //
    Route::get('/services/web-development',['as' => 'Web Development', 'uses' => 'ServicesPagesController@getWebDevelopmentPage']);
    Route::get('/services/web-design',['as' => 'Web Design', 'uses' => 'ServicesPagesController@getWebDesignPage']);
    Route::get('/services/web-development',['as' => 'Web Development', 'uses' => 'ServicesPagesController@getWebDevelopmentPage']);
    Route::get('/services/mobile-responsive-design',['as' => 'Mobile + Responsive Design', 'uses' => 'ServicesPagesController@getMobileResponsiveDesignPage']);
    Route::get('/services/email-marketing',['as' => 'Email Marketing', 'uses' => 'ServicesPagesController@getEmailMarketingPage']);
    Route::get('/services/graphic-design',['as' => 'Graphic Design', 'uses' => 'ServicesPagesController@getGraphicDesignPage']);
    Route::get('/services/web-hosting',['as' => 'Web Hosting', 'uses' => 'ServicesPagesController@getHostingPage']);
    Route::get('/services/stategy-and-scope',['as' => 'Strategy and Scope', 'uses' => 'ServicesPagesController@getStrategyAndScopePage']);
    Route::get('/services/partner-with-us',['as' => 'Partner with us', 'uses' => 'ServicesPagesController@getPartnerWithUsPage']);

// ** Case Studies ** //
//Route::get('/case-studies',  ['as' => 'Case Studies', 'uses' => 'PagesController@getCaseStudiesPage']);

// ** Work ** //
Route::get('/work',  ['as' => 'Work', 'uses' => 'PagesController@getWorkPage']);
    // ** Submenu/ ** //
    Route::get('/work/websites',['as' => 'Websites', 'uses' => 'WorkPagesController@getWebsiteWork']);
    Route::get('/work/logo',['as' => 'Logos', 'uses' => 'WorkPagesController@getLogoWork']);
    Route::get('/work/graphic-design',['as' => 'Graphic Design', 'uses' => 'WorkPagesController@getGraphicDesignWork']);

// ** Support Studies ** //
Route::get('/support',  ['as' => 'Support', 'uses' => 'PagesController@getSupportPage']);

// ** Contact Studies ** //
Route::get('/contact',  ['as' => 'Contact us', 'uses' => 'PagesController@getContactPage']);

// ** POST Routes ** //

Route::post('/contact', 'FormsController@postContact');
Route::post('/newsletter', 'FormsController@postNewsletter');

// ** Admin** //
Route::group(['middleware' => 'auth'], function() {
    Route::get('admin/user-panel', 'AdminUserControlPanel@getUserPanelPage');
    Route::get('admin/user-panel/gallery/upload',  ['as' => 'Upload', 'uses' => 'AdminGalleryController@getGalleryUploadPage']);
    Route::get('admin/user-panel/gallery/edit/{id}',  ['as' => 'Edit', 'uses' => 'AdminGalleryController@getGalleryEditPage']);
    Route::get('admin/user-panel/gallery',  ['as' => 'Gallery', 'uses' => 'AdminGalleryController@getGalleryPage']);
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





// ** API Routes ** //

Route::get('api/admin/gallery', 'AdminGalleryController@getGalleryTable');
Route::get('api/admin/gallery/{id}', 'AdminGalleryController@getGalleryById');
Route::post('api/admin/gallery', 'AdminGalleryController@postUploadDataToGalleryTable');
Route::delete('api/admin/gallery/{id}', 'AdminGalleryController@deleteItemFromGalleryTable');
