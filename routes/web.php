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
    return view('index');
});

Route::get('staff_bio/{id}','HomeController@bio')->name('userBio');
Route::get('bios','HomeController@bios')->name('bios');
Route::post('store_bio','HomeController@storeBios')->name('storeBio');
Route::post('check_staff','HomeController@checkStaff')->name('checkStaff');
Route::get('remove/{id}','HomeController@remove')->name('remove');
Route::post('postContact','HomeController@postContact')->name('postContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
