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
    dd('123');
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard_tmp');
});

Route::get('/login', function () {
    return view('layouts.auth');
});

Route::get('/password/reset', function () {
    return view('auth.passwords.reset');
})->name('password.reset');
