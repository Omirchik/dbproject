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

Route::get('subjects', 'TestController@chooseSubjects');

Route::get('users', 'TestController@test');

Route::post('show_direction', 'TestController@showDirection');

Route::post('show_professions', 'TestController@showProfessions');

Route::post('show_specialties', 'TestController@showSpecialties');

Route::post('/post-data', 'TestController@recieveData')->name('postData');

