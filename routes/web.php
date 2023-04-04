<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout'); 



Route::get('/', function () {
    return view('index');
});


Route::get('about', function(){
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/interviews', function () {
    return view('interviews');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/politics', function () {
    return view('politics');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/trending', function () {
    return view('trending');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/commedy', function () {
    return view('commedy');
});

