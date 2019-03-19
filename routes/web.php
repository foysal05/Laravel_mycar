<?php

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

Route::get('/test', function () {
    return view('users.layout.test');
});

Route::get('/', 'UserPageController@index')->name('index');
Route::get('/home', 'UserPageController@index')->name('index');
Route::get('/Earn', 'UserPageController@earn')->name('earn');
Route::get('/MyCost', 'UserPageController@cost')->name('cost');
Route::get('/MyCar', 'UserPageController@car')->name('car');
Route::get('/Driver', 'UserPageController@driver')->name('driver');
Route::get('/Report', 'UserPageController@report')->name('report');
Route::get('/AddCar', 'UserPageController@new_car')->name('new_car');

Route::get('/Cars', 'UserPageController@cars')->name('cars');


//Car Data Route
Route::post('/Car/Update/{id}', 'CarController@update')->name('car.update');
Route::post('/Cars/Create', 'CarController@store')->name('cars.store');
Route::get('/Car/Update/{id}', 'CarController@edit')->name('car.edit');
Route::post('/Car/Delete/{id}', 'CarController@delete')->name('car.delete');

