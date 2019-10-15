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
    
    return redirect('/events');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/organiser', 'Auth\LoginController@showOrganiserLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/organiser', 'Auth\RegisterController@showOrganiserRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/organiser', 'Auth\LoginController@OrganiserLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/organiser', 'Auth\RegisterController@createOrganiser');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/organiser', 'organiser')->middleware('auth:organiser');
Route::resource('events','EventController');
Route::resource('artists','ArtistController');
// Route::get('/venue', 'EventController@venue');
Route::get('/event_detail','EventController@event_detail');
Route::get('/movies','EventController@movies')->name('movies');
Route::get('/concerts','EventController@concerts');
Route::get('/standup','EventController@standup');
Route::get('/plays','EventController@plays')->name('plays');
Route::post('/movies/filter','EventController@fetch_movies')->name('fetch-movies');
Route::post('/plays/filter','EventController@fetch_plays')->name('fetch-plays');
Route::resource('venues','VenueController');
Route::resource('shows','ShowController');
Route::get('/seats/{id}','VenueController@seats')->middleware('auth');
Route::post('/book','VenueController@book')->middleware('auth');
// https://laravel.com/docs/6.x/authentication#invalidating-sessions-on-other-devices