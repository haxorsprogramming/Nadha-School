<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;

Route::get('/', [C_Home::class, 'home']);