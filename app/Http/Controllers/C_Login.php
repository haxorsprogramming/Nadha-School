<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
class C_Login extends Controller
{
    public function login_page()
    {
        $arrPic = ['1','2'];
        $pic = Arr::random($arrPic);
        $pathPic = asset('ladun/login/assets/media/photos/cover_'.$pic.'.jpg');
        return view('login.login_page', ['pic' => $pic, 'pathcover' => $pathPic]);
    }
}
