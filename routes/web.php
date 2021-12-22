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

Route::get('/')->uses('HomeController')->name('site.home');
Route::get('/about')->uses('AboutController')->name('site.about');

Route::prefix('auth')->namespace('Auth')->group(function () {
    Route::get('/register')->name('auth.register.index')->uses('RegisterController');
    Route::post('/register')->name('auth.register.post')->uses('RegisterStoreController');
});
