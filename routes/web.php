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

Route::get('/discover/featured', function () {
    return view('discover/featured_art');
});

Route::get('/discover/week', function () {
    return view('discover/art_of_week');
});

Route::get('/discover/gift', function () {
    return view('discover/gift');
});

Route::get('/discover/featured', function () {
    return view('discover/featured_art');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/artist', function () {
    return view('artist');
});


Route::get('/art_work/all', function () {
    return view('art_work/all');
});
Route::get('art_work/painting', function () {
    return view('art_work/painting');
});
Route::get('art_work/sculpture', function () {
    return view('art_work/sculpture');
});
Route::get('art_work/photography', function () {
    return view('art_work/photography');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
