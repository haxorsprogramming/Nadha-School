<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SiswaMdl;

class siswaCon extends Controller
{
    public function datasiswa()
    {   
        $siswa = SiswaMdl::all();
        
        $provinsi = DB::table('tbl_provinsi')->get();

        return view('dasbor.siswa.siswa', ['provinsi' => $provinsi]);
    }

    public function cekValidasi()
    {
        $siswa = SiswaMdl::all();
    }
}
