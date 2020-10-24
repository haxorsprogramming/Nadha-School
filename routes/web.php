<?php

use Illuminate\Support\Facades\Route;

// HALAMAN UTAMA 
Route::get('/', 'PageCon@home');

// HALAMAN LOGIN 
Route::get('/login', 'PageCon@login');
Route::post('/login/prosesLogin', 'loginCon@prosesLogin');

Route::group(['middleware' => 'CekUser'], function () {
    // DASHBOARD 
    Route::get('/dashboard', 'mainCon@dashboard');
    Route::get('/dashboard/beranda', 'mainCon@beranda');
    // DATA MASTER (SEKOLAH) 
    Route::get('/sekolah/datasekolah', 'sekolahCon@datasekolah');
    Route::post('/sekolah/datasekolah/detail', 'sekolahCon@detaildatasekolah');
    Route::post('/sekolah/datasekolah/update', 'sekolahCon@updatedatasekolah');
    // DATA JURUSAN 
    Route::get('/jurusan/datajurusan','jurusanCon@datajurusan');
    Route::post('/jurusan/datajurusan/tambah','jurusanCon@tambahdatajurusan');
    // DATA ROMBEL 
    Route::get('/rombel/datarombel', 'rombelCon@datarombel');
    // DATA SEMESTER
    Route::get('/semester/datasemester', 'semesterCon@datasemester');
    // DATA TAHUN AJARAN 
    Route::get('/tahunajaran/datatahunajaran', 'tahunAjaranCon@datatahunajaran');
    // DATA MATA PELAJARAN 
});

// LOGOUT 
Route::get('/logout', 'PageCon@logout');
