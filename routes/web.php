<?php

use App\Models\Person;
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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');
Route::get('/base', 'PagesController@base');
Route::get('/reference', 'PagesController@reference');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/portfolio', 'PagesController@portfolio');


Auth::routes([
    // 'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/private', 'HomeController@private');

Route::resource('powets', 'PowetsController');
Route::resource('gmina', 'GminaController');
Route::resource('city', 'CityController');
Route::resource('citizen', 'CitizenController');
Route::resource('person', 'PersonController');



