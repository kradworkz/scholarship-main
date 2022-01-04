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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('01101011 01110010 01100001 01100100')->group(function(){
    Route::get('dropdowns', 'DropdownController@api');
    Route::get('courses', 'CourseController@api');
    Route::get('schools', 'SchoolController@api');
    Route::get('locations/{type}', 'LocationController@api');
    Route::get('agencies', 'AgencyController@api');
});