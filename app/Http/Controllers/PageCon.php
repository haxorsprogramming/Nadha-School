<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UserMdl;
 
class PageCon extends Controller
{
    public function home()
    {
        return view('home.home');
    }

    public function login()
    {
        $pic = "12";
        $pic = substr(str_shuffle($pic), 0, 1);

        return view('login.login', ['pic' => $pic]);
    }

    public function dashboard()
    {
        return view('home.dashboard');
    }
    
}