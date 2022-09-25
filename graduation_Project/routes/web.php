<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\AdmainController;
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

Route::get('/singlephot', function () {
    return view('singlephot');
});
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
Route::get('/photographers', function () {
    return view('photographers');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/basic_elements', function () {
    return view('dashboard.basic_elements');
});

Route::get('/basic-table', function () {
    return view('dashboard.basic-table');
});
Route::get('/blank-page', function () {
    return view('dashboard.blank-page');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/users', function () {
    return view('dashboard.users');
});

Route::get('/buttons', function () {
    return view('dashboard.buttons');
});

Route::get('/chartjs', function () {
    return view('dashboard.chartjs');
});

Route::get('/login', function () {
    return view('dashboard.login');
});

Route::get('/register', function () {
    return view('dashboard.register');
});

Route::get('/typography', function () {
    return view('dashboard.typography');
});

Route::get('/error-404', function () {
    return view('dashboard.error-404');
});

Route::get('/error-500', function () {
    return view('dashboard.error-500');
});

Route::get('/messages', function () {
    return view('dashboard.messages');
});
Route::get('/comments', function () {
    return view('dashboard.comments');
});
Route::get('/messages',[UserController::class,'getmessage']);



// register
Route::view('registeration', 'register');
Route::post('registeration', [UserController::class,'SignUp'])->name('register');
// end register

// Login
Route::view('/Login', 'Login');
Route::post('/Login', [UserController::class,'Login']);
// Login

// index
Route::get('/', [UserController::class,'showall']);
//index

// start photographer dashboard

Route::get('/photographer', function () {
    return view('dashboard.photographer');
});
Route::get('/photographer', [UserController::class,'photo_dashboard']);
Route::get('rejected/{id}', [UserController::class,'rejected'])->name('reject');
Route::get('accepted/{id}', [UserController::class,'accepted'])->name('accept');
//photographer

// start reservition dashboard

Route::get('/reservition', function () {
    return view('dashboard.reservition');
});
Route::get('/reservition', [UserController::class,'book_dashboard']);
Route::get('rejectedbook/{id}', [UserController::class,'rejected_book']);
Route::get('acceptedbook/{id}', [UserController::class,'accepted_book']);
//reservition


//users
Route::get('/users', [UserController::class,'users']);
//end users
// tools
Route::get('/tools', function () {
    return view('dashboard.tools');
});
Route::view('tool', 'tools');
Route::post('/tool', [AdmainController::class,'Add'])->name('tools');
//tools

// photographers
Route::get('/photographers', [UserController::class,'photographer']);
//photographers


// contact
Route::view('contact', 'contact');
Route::post('contact', [UserController::class,'contact'])->name('contact');
// end contact

// time
Route::get('/time', function () {
    return view('dashboard.time');
});
Route::get('times', [AdmainController::class,'Time']);
Route::post('time', [AdmainController::class,'Time'])->name('times');
// end time


//singlePage
Route::get('/singlePage/{id}', [UserController::class,'singlePage'])->name('singlePage');
Route::get('/singlephot', [UserController::class,'imagesTime']);
Route::get('/Booking/{id}', [UserController::class,'Booking'])->name('Booking');
Route::post('/book', [UserController::class,'reserve'])->name('book');

//singlePage

//logout
Route::get('/logout' , [UserController::class , 'logout']);

// Route::get('/service/{id}', UserController::class,'reservition');
