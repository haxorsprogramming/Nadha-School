<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainCon extends Controller
{

    public function dashboard()
    {
        return view('dasbor.dashboard');
    }

    public function beranda(Request $request)
    {
        return view('dasbor.beranda');
    }

}
