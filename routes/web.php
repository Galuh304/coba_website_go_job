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
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.login');
});
Route::get('/lowongan', function () {
    return view('user.lowongan_kerja_pelamar');
});
Route::get('/profil', function () {
    return view('user.profil');
});
Route::get('/dashboard', function () {
    return view('user.dashboard');
});