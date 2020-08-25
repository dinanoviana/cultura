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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/events', function () {
//     return view('events');
// });

// Route::get('/url', 'ControllerName@MethodName');

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Events
Route::get('/events', 'EventsController@index');

// Places
Route::get('/places', 'PlacesController@index');
Route::get('/places/create', 'PlacesController@create');
Route::get('/places/{place}', 'PlacesController@show');
Route::post('/places', 'PlacesController@store');
Route::post('/places/{place}', 'PlacesController@destroy');
