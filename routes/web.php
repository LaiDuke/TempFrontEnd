<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TouristSpotController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'store']);
Route::get('/search', function () {
    return view('search');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/{id}', [HotelController::class, 'show']);
Route::get('/resort', function () {
    return view('information/resort');
});
Route::get('/tourist-spot', [TouristSpotController::class, 'index']);
Route::get('/transport', function () {
    return view('information/transport');
});
Route::get('/restaurant', function () {
    return view('information/restaurant');
});
Route::get('/detail', function () {
    return view('detail');
});
