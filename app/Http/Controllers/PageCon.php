<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UserMdl;
use Illuminate\Support\Arr;

class PageCon extends Controller
{
    public function home()
    {
        echo "ke login aja dulu ces ...";
    }

    public function login()
    {
        $arrPic = ['1','2'];
        $pic = Arr::random($arrPic);

        return view('login.login', ['pic' => $pic]);
    }

    public function logOut(Request $request)
    {
        $request->session()->flush();

        return redirect('login');
    }
    
}