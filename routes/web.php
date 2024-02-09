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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/bp/{breeder}/edit', 'App\Http\Controllers\BProfilesController@edit');
Route::patch('/bp/{breeder}', 'App\Http\Controllers\BProfilesController@update');
Route::get('/bp/{breeder}', 'App\Http\Controllers\BProfilesController@index');

Route::get('/b/{user}/create', 'App\Http\Controllers\BreedersController@create');
Route::post('/b', 'App\Http\Controllers\BreedersController@store');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit');
Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update');
Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
