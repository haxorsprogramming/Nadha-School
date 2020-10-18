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

Route::get('/', 'PageCon@home');

Route::get('/login', 'PageCon@login');
Route::post('/prosesLogin', 'PageCon@prosesLogin');

Route::get('/dashboard', 'PageCon@dashboard');