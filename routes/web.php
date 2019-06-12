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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('enquirys','EnquirysController');
Route::resource('modeltypes','ModelTyesController');
Route::resource('taluks','TaluksController');
Route::resource('modelvarients','ModelVarientsController');
Route::resource('vendors','VendorsController');
Route::resource('districts','DistrictsController');
Route::resource('users','UsersController');


