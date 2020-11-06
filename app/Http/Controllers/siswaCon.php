<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiswaMdl;

class siswaCon extends Controller
{
    public function datasiswa()
    {   
        $siswa = SiswaMdl::all();
        return view('dasbor.siswa.datasiswa');
    }
}
