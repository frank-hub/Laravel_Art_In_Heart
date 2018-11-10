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

Route::get('/discover/artist', function () {
    return view('artist');
});


// Route::get('/art_work/all', function () {
//     return view('art_work/all');
// });
// Route::get('art_work/painting', function () {
//     return view('art_work/painting');
// });
// Route::get('art_work/sculpture', function () {
//     return view('art_work/sculpture');
// });
// Route::get('art_work/photography', function () {
//     return view('art_work/photography');
// });
Auth::routes();
Route::get('/', 'DiscoveriesController@home')->name('home');

Route::get('/discover/featured', 'DiscoveriesController@feature_art')->name('featured');
Route::get('/discover/week', 'DiscoveriesController@week')->name('week');
Route::get('/discover/gift', 'DiscoveriesController@gift')->name('gift');

// Artist
Route::get('/discover/artist', 'ArtistController@artist')->name('artist');

// Art Work
Route::get('/art_work/all', 'Add_Arts@all')->name('all');
Route::get('/art_work/painting', 'Add_Arts@painting')->name('painting');
Route::get('/art_work/sculpture', 'Add_Arts@sculpture')->name('sculpture');
Route::get('/art_work/photography', 'Add_Arts@photography')->name('photography');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_art', 'Add_Arts@index')->name('add_art');
Route::get('/discovery', 'DiscoveriesController@index')->name('discovery');
Route::get('/artist', 'ArtistController@index')->name('artist');


Route::resource('add_art', 'Add_Arts');
Route::resource('discovery', 'DiscoveriesController');
Route::resource('artist', 'ArtistController');
Route::resource('art', 'Add_Arts');

