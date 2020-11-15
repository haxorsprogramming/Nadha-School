<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\SiswaMdl;
use App\Http\Controllers\utilityCon;

class siswaCon extends Controller
{

    protected $utilityCon;

    public function datasiswa()
    {   
        $siswa = SiswaMdl::all();
        
        $provinsi = DB::table('tbl_provinsi')->get();

        $agama = $this -> utilityCon -> getAgama();

        return view('dasbor.siswa.siswa', ['provinsi' => $provinsi, 'agama' => $agama]);
    }

    public function cekValidasi()
    {
        $siswa = SiswaMdl::all();

        $i = 0;
    }
}
