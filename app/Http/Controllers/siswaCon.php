<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiswaMdl;

class siswaCon extends Controller
{
    public function datasiswa()
    {   
        return view('dasbor.siswa.datasiswa');
    }
}
