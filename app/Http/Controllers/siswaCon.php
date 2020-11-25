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
        $provinsi = DB::table('tbl_provinsi') -> get();
        $agama = $this -> utilityCon -> getAgama();
        $golonganDarah = $this -> utilityCon -> getGolonganDarah();
        $statusOrangTua = $this -> utilityCon -> getStatusOrangTua();
        $dr =  ['provinsi' => $provinsi, 'agama' => $agama, 'golonganDarah' => $golonganDarah, 'statusOrangTua' => $statusOrangTua];

        return view('dasbor.siswa.siswa', $dr);
    }

    public function tambahdatasiswa(Request $request)
    {
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function cekValidasi()
    {
        $siswa = SiswaMdl::all();
        $i = 0;
    }
}
