<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rombelCon extends Controller
{
    public function datarombel()
    {
        $data = ['rombel' => 'dataRombelDisini'];

        return view('dasbor.rombel.datarombel', $data);
    }
}
