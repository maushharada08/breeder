<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/bp/{user}/edit', 'App\Http\Controllers\BProfilesController@edit');
Route::patch('/bp/{user}', 'App\Http\Controllers\BProfilesController@update');
Route::get('/bp/{user}', 'App\Http\Controllers\BProfilesController@index');

Route::get('/b/{user}/create', 'App\Http\Controllers\BreedersController@create');
Route::post('/b', 'App\Http\Controllers\BreedersController@store');

Route::get('/d/{user}/create', 'App\Http\Controllers\DogsController@create');
Route::get('/d/{dog}', 'App\Http\Controllers\DogsController@show');
Route::post('/d', 'App\Http\Controllers\DogsController@store');
Route::get('/', 'App\Http\Controllers\DogsController@index');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit');
Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update');
Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index');
