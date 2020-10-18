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
        return view('login.login');
    }

    public function prosesLogin(Request $request)
    {
        $userForm = $request -> username;
        $passForm = $request -> password;
        //cek apakah user terdaftar
        $cju = UserMdl::where('username', $userForm) -> count();

        if($cju > 0){
            $ud = UserMdl::where('username', $userForm) -> first();
            $user = $ud -> username;
            $pass = $ud -> password;
            $cp = password_verify($passForm, $pass);
    
            if($cp === true){
                $st = 'success';
            }else{
                $st = 'error';
            }

        }else{
            $st = 'error';
        }
        
        $dr = ['status' =>  $st ];
        return \Response::json($dr);
    }

    public function dashboard()
    {
        return view('home.dashboard');
    }
    
}