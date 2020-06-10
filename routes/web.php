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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tweets', 'TweetController@index')->name('home');

Route::post('/tweets', 'TweetController@store')->name('tweets.store');

Route::get('/profiles/{user:name}', 'ProfileController@show')->name('profile');

Route::post('/profiles/{user:name}/follow', 'FollowController@store')->name('follow');

Route::get('/profiles/{user:name}/edit', 'ProfileController@edit')->name('profile.edit');
