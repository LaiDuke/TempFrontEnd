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
    return view('home');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hotel', function () {
    return view('information/hotel');
});
Route::get('/resort', function () {
    return view('information/resort');
});
Route::get('/tourist-spot', function () {
    return view('information/tourist-spot');
});
Route::get('/transport', function () {
    return view('information/transport');
});;
Route::get('/restaurant', function () {
    return view('information/restaurant');
});
