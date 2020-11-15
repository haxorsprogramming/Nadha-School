<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Import model 
use App\SiswaMdl;

// Import another controller 
use App\Http\Controllers\utilityCon;

class siswaCon extends Controller
{

    protected $utilityCon;

    public function __construct(utilityCon $utilityCon)
    {
        $this -> utilityCon = $utilityCon;
    }

    public function datasiswa()
    {   
        $siswa = SiswaMdl::all();   
        
        $provinsi = DB::table('tbl_provinsi')->get();

        $agama = $this -> utilityCon -> getAgama();

        $golonganDarah = $this -> utilityCon -> getGolonganDarah();

        return view('dasbor.siswa.siswa', ['provinsi' => $provinsi, 'agama' => $agama, 'golonganDarah' => $golonganDarah]);
    }

    public function cekValidasi()
    {
        $siswa = SiswaMdl::all();

        $i = 0;
    }
}
