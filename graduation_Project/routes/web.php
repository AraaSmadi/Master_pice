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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/opening', function () {
    return view('opening');
});Route::get('/price', function () {
    return view('price');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/photographer', function () {
    return view('photographer');
});
