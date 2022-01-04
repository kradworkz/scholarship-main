<?php

use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Auth\WelcomeController;
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


Auth::routes(['register' => false]);

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [WelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [WelcomeController::class, 'savePassword']);
});

Route::prefix('request')->group(function(){

    Route::get('/dropdown/{classification}/{type}/{keyword}', 'DropdownController@index');
    Route::get('/dropdowns/{classification}/{type}', 'DropdownController@lists');
    Route::get('/dropdowncount/{classification}/{type}', 'DropdownController@count');
    Route::post('/dropdown/store', 'DropdownController@store');

    Route::get('/location/{type}/{count}/{keyword}', 'LocationController@index');
    Route::get('/location/regions', 'LocationController@regions');
    Route::get('/location/provinces/{code}', 'LocationController@provinces');
    Route::get('/location/municipalities/{code}', 'LocationController@municipalities');

    Route::get('/Region/fetch', 'Sync\RegionController@fetch');
    Route::post('/regions/store', 'Sync\RegionController@store');
    Route::get('/Province/fetch', 'Sync\ProvinceController@fetch');
    Route::post('/provinces/store', 'Sync\ProvinceController@store');
    Route::get('/Municipality/fetch', 'Sync\MunicipalityController@fetch');
    Route::post('/municipalities/store', 'Sync\MunicipalityController@store');

    Route::post('/user/password', 'HomeController@password');
    Route::get('/users/{key}/{counts}', 'UserController@lists');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/logs/{key}/{counts}', 'UserController@myLogs');

    Route::get('/school/{id}', 'SchoolController@view');
    Route::get('/schools/{key}/{counts}', 'SchoolController@index');
    Route::post('/school/store', 'SchoolController@store');
    Route::post('/campus/store', 'SchoolController@campus');
    Route::get('/schools', 'SchoolController@lists');
    
    Route::get('/courses/{key}/{counts}', 'CourseController@index');
    Route::post('/course/store', 'CourseController@store');

    Route::get('/agencies/{key}/{counts}', 'AgencyController@index');
    Route::post('/agency/store', 'AgencyController@store');
});

Route::get('/{any?}', 'HomeController@home')->where('any', '[\/\w\.-]*');

// Route::get('/{any?}', function() {
//     return view('home');
// });


