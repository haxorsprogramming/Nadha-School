<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TahunAjaranMdl;

class tahunAjaranCon extends Controller
{
    public function datatahunajaran(Request $request)
    {
        $dataTahunAjaran = TahunAjaranMdl::all();
        $data = [ 'datatahunajaran' => $dataTahunAjaran ];

        return view('dasbor.tahunajaran.datatahunajaran', $data);
    }
}
