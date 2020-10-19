<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainCon extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->session()->has('username')) {
            echo "Sudah login";
        }else{
            echo "Belum login";
        }
    }
}
