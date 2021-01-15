<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::namespace('Back')->middleware(['auth','admin'])->prefix('/admin')->group(function (){
    Route::get('/','Controller@index')->name('admin');
    Route::namespace('News')->prefix('/news')->group(function (){
        Route::get('/','Controller@index')->name('admin.news');
        Route::get('/create','Controller@create')->name('admin.news.create');
        Route::post('/store','Controller@store')->name('admin.news.store');
        Route::get('/delete/{news}','Controller@destroy')->name('admin.news.delete');
    });
    Route::namespace('Restaurants')->prefix('/res')->group(function (){
        Route::get('/','Controller@index')->name('res');
        Route::get('/create','Controller@create')->name('res.create');
        Route::post('/store','Controller@store')->name('res.store');
        Route::get('/delete/{restaurants}','Controller@destroy')->name('res.delete');
    });
    Route::namespace('Rooms')->prefix('/rooms')->group(function (){
        Route::get('/','Controller@index')->name('room');
        Route::get('/create','Controller@create')->name('room.create');
        Route::post('/store','Controller@store')->name('room.store');
        Route::get('/delete/{rooms}','Controller@destroy')->name('room.delete');
    });
});
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
Route::namespace('Front')->prefix('/')->group(function (){
    Route::get('/','Controller@index')->name('hotel');
    Route::namespace('News')->prefix('/news')->group(function (){
        Route::get('/','Controller@index')->name('news');
    });
    Route::namespace('Rooms')->prefix('/rooms')->group(function (){
        Route::get('/','Controller@index')->name('rooms');
    });
    Route::namespace('Booking')->prefix('/booking')->group(function (){
        Route::get('/','Controller@index')->name('booking');
    });
    Route::namespace('Failes')->prefix('/failes')->group(function (){
        Route::get('/','Controller@index')->name('failes');
    });
    Route::namespace('Contacts')->prefix('/contacts')->group(function (){
        Route::get('/','Controller@index')->name('contacts');
    });
     Route::namespace('About')->prefix('/about')->group(function (){
        Route::get('/','Controller@index')->name('about');
    });
    Route::namespace('Restaurnts')->prefix('/about')->group(function (){
        Route::get('/','Controller@index')->name('restaurant');
    });
});