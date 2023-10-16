<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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


Route::post('/login', 'Api\\Auth\AuthController@login');

Route::post('/logout', 'Api\\Auth\AuthController@logout');

Route::prefix('career')->middleware('auth:api')->group(function() {

    // api/career/storecareer
    Route::post('/storecareer', [
        'uses' => 'Api\\Career\CareerController@store'
    ]);

    // api/career/updatecareer/{id}
    Route::post('/updatecareer/{id}', [
        'uses' => 'Api\\Career\CareerController@update'
    ]);

    // api/career/careers
    Route::get('/careers', [
        'uses' => 'Api\\Career\CareerController@careers'
    ]);

    // api/career/updatecareerstatus
    Route::post('/updatecareerstatus/{Career}', [
        'uses' => 'Api\\Career\CareerController@updateCareerStatus'
    ]);

    // api/career/careers
    Route::post('/deletecareer/{Career}', [
        'uses' => 'Api\\Career\CareerController@destroy'
    ]);
    
});

/**
 * Public 
 **/
// api/career/careers
Route::get('/careerslist', [
    'uses' => 'Api\\Career\CareerController@careersList'
]);

Route::post('/sendapplication', [
    'uses' => 'Api\\Career\CareerController@sendApplication'
]);

Route::post('/sendcontactemail', [
    'uses' => 'Api\\Contact\ContactController@sendContactEmail'
]);

// api/services

Route::post('/sendservicesemail', [
    'uses' => 'Api\\Services\ServicesController@sendServicesEmail'
]);
