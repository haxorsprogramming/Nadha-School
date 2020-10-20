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

// HALAMAN UTAMA 
Route::get('/', 'PageCon@home');

// HALAMAN LOGIN 
Route::get('/login', 'PageCon@login');
Route::post('/login/prosesLogin', 'loginCon@prosesLogin');

Route::group(['middleware' => 'CekUser'], function () {
    // DASHBOARD 
    Route::get('/dashboard', 'mainCon@dashboard');
    Route::get('/dashboard/beranda', 'mainCon@beranda');
    // DATA MASTER (SEKOLAh) 
    Route::get('/sekolah/datasekolah', 'sekolahCon@datasekolah');
    Route::post('/sekolah/datasekolah/detail', 'sekolahCon@detaildatasekolah');
});

// LOGOUT 
Route::get('/logout', 'PageCon@logout');
