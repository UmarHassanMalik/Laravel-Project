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

Route::get('/read','App\Http\Controllers\user_registrationsController@read');

Route::get('/delete/{id}','App\Http\Controllers\user_registrationsController@delete');

Route::get('/update/{id}','App\Http\Controllers\user_registrationsController@update');

Route::post('/save/{id}','App\Http\Controllers\user_registrationsController@save')->name('save');

Route::get('/create','App\Http\Controllers\user_registrationsController@create');

Route::post('/add','App\Http\Controllers\user_registrationsController@add')->name('add');

Route::get('/create/{id}','App\Http\Controllers\user_registrationsController@update');

Route::post('/save/{id}','App\Http\Controllers\user_registrationsController@create')->name('save');






Route::get('/carread','App\Http\Controllers\car_detailsController@read');

Route::get('/cardelete/{id}','App\Http\Controllers\car_detailsController@delete');

Route::get('/carupdate/{id}','App\Http\Controllers\car_detailsController@update');

Route::post('/carsave/{id}','App\Http\Controllers\car_detailsController@carsave')->name('carsave');

Route::post('/caradd/{id}','App\Http\Controllers\car_detailsController@caradd')->name('caradd');

Route::get('/carcreate','App\Http\Controllers\car_detailsController@carcreate');

Route::post('/caradd','App\Http\Controllers\car_detailsController@caradd')->name('caradd');

Route::get('/carcreate/{id}','App\Http\Controllers\car_detailsController@update');

Route::post('/save/{id}','App\Http\Controllers\car_detailsController@carcreate')->name('save');






Route::get('/busread','App\Http\Controllers\bus_detailsController@read');

Route::get('/busdelete/{id}','App\Http\Controllers\bus_detailsController@delete');

Route::get('/busupdate/{id}','App\Http\Controllers\bus_detailsController@update');

Route::post('/bussave/{id}','App\Http\Controllers\bus_detailsController@bussave')->name('bussave');

Route::get('/buscreate','App\Http\Controllers\bus_detailsController@buscreate');

Route::post('/busadd','App\Http\Controllers\bus_detailsController@busadd')->name('busadd');

Route::get('/buscreate/{id}','App\Http\Controllers\bus_detailsController@update');

Route::post('/save/{id}','App\Http\Controllers\bus_detailsController@buscreate')->name('save');



Route::get('/bikeread','App\Http\Controllers\bike_detailsController@read');

Route::get('/bikedelete/{id}','App\Http\Controllers\bike_detailsController@delete');

Route::get('/bikeupdate/{id}','App\Http\Controllers\bike_detailsController@update');

Route::post('/bikesave/{id}','App\Http\Controllers\bike_detailsController@bikesave')->name('bikesave');

Route::get('/bikecreate','App\Http\Controllers\bike_detailsController@bikecreate');

Route::post('/bikeadd','App\Http\Controllers\bike_detailsController@bikeadd')->name('bikeadd');

Route::get('/bikecreate/{id}','App\Http\Controllers\bike_detailsController@update');

Route::post('/save/{id}','App\Http\Controllers\bike_detailsController@bikecreate')->name('save');



Route::get('/miscellaneousread','App\Http\Controllers\miscellaneous_detailsController@read');

Route::get('/miscellaneousdelete/{id}','App\Http\Controllers\miscellaneous_detailsController@delete');

Route::get('/miscellaneousupdate/{id}','App\Http\Controllers\miscellaneous_detailsController@update');

Route::post('/miscellaneoussave/{id}','App\Http\Controllers\miscellaneous_detailsController@miscellaneoussave')->name('miscellaneoussave');

Route::get('/miscellaneouscreate','App\Http\Controllers\miscellaneous_detailsController@miscellaneouscreate');

Route::post('/miscellaneousadd','App\Http\Controllers\miscellaneous_detailsController@miscellaneousadd')->name('miscellaneousadd');

Route::get('/miscellaneouscreate/{id}','App\Http\Controllers\miscellaneous_detailsController@update');

Route::post('/save/{id}','App\Http\Controllers\miscellaneous_detailsController@miscellaneouscreate')->name('save');





Route::get('/vehicleread','App\Http\Controllers\vehicle_detailsController@read');

Route::get('/vehicledelete/{id}','App\Http\Controllers\vehicle_detailsController@delete');

Route::get('/vehicleupdate/{id}','App\Http\Controllers\vehicle_detailsController@update');

Route::post('/vehiclesave/{id}','App\Http\Controllers\vehicle_detailsController@vehiclesave')->name('vehiclesave');

Route::post('/vehicleadd/{id}','App\Http\Controllers\vehicle_detailsController@vehicleadd')->name('vehicleadd');

Route::get('/vehiclecreate','App\Http\Controllers\vehicle_detailsController@vehiclecreate');

Route::post('/vehicleadd','App\Http\Controllers\vehicle_detailsController@vehicleadd')->name('vehicleadd');

Route::get('/vehiclecreate/{id}','App\Http\Controllers\vehicle_detailsController@update');

Route::post('/save/{id}','App\Http\Controllers\vehicle_detailsController@vehiclecreate')->name('save');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
