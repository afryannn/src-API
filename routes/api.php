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

// Route::get('country','CountryController@country');
// Route::get('country/{id}','CountryController@countryByID');
// Route::post('country','CountryController@countrySave');
// Route::put('country/{id}','CountryController@countryUpdate');
// Route::delete('country/{country}','CountryController@countryDelete');
Route::apiResource('country','Country');
Route::get('File/country_list','FileController@country' );
Route::post('file/country_list','FileController@Save');