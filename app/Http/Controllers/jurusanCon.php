<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JurusanMdl;

class jurusanCon extends Controller
{
    public function datajurusan(Request $request)
    {
        $dataJurusan = JurusanMdl::all();
        
        $data = ['dataJurusan' => $dataJurusan];

        return view('dasbor.jurusan.datajurusan', $data);
    }
}
