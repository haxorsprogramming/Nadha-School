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
    // DATA MASTER SEKOLAH 
    Route::get('/sekolah/datasekolah', 'sekolahCon@datasekolah');
    Route::post('/sekolah/datasekolah/detail', 'sekolahCon@detaildatasekolah');
    Route::post('/sekolah/datasekolah/update', 'sekolahCon@updatedatasekolah');
    // DATA SISWA 
    Route::get('/siswa/datasiswa', 'siswaCon@datasiswa');
    Route::get('/siswa/getdatasiswa', 'siswaCon@getDataSiswa');
    Route::post('/siswa/datasiswa/tambah','siswaCon@tambahdatasiswa');
    // DATA JURUSAN 
    Route::get('/jurusan/datajurusan','jurusanCon@datajurusan');
    Route::post('/jurusan/datajurusan/tambah','jurusanCon@tambahdatajurusan');
    // DATA ROMBEL 
    Route::get('/rombel/datarombel', 'rombelCon@datarombel');
    Route::post('/rombel/datarombel/tambah', 'rombelCon@tambahdatarombel');
    // DATA SEMESTER
    Route::get('/semester/datasemester', 'semesterCon@datasemester');
    // DATA TAHUN AJARAN 
    Route::get('/tahunajaran/datatahunajaran', 'tahunAjaranCon@datatahunajaran');
    // DATA MATA PELAJARAN 
    
    // DATA DAERAH 
    Route::get('/daerah/provinsi','daerahCon@provinsi');
    Route::get('/daerah/provinsi/{idprovinsi}','daerahCon@provinsidetail');
    Route::get('/daerah/kabupaten/{idkabupaten}','daerahCon@kabupatendetail');
    Route::get('/daerah/kecamatan/{idkecamatan}','daerahCon@kecamatandetail');
    // UTILITY
    
    // TESTING ROUTE 
    Route::get('/siswa/cekvalidasi', 'siswaCon@cekValidasi');
});

// TEST
Route::post('/test/allow','utilityCon@testallow');
// LOGOUT 
Route::get('/logout', 'PageCon@logout');
