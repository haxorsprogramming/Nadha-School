<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JurusanMdl;

class rombelCon extends Controller
{
    public function datarombel()
    {
        $dataJurusan = JurusanMdl::all();

        $data = ['datajurusan' => $dataJurusan];

        return view('dasbor.rombel.datarombel', $data);
    }
}
