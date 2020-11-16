<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMdl;

class loginCon extends Controller
{
    
    public function prosesLogin(Request $request)
    {
        $userForm = $request -> username;
        $passForm = $request -> password;
        // cek apakah user terdaftar
        $cju = UserMdl::where('username', $userForm) -> count();

        if($cju > 0){
            $ud = UserMdl::where('username', $userForm) -> first();
            $pass = $ud -> password;
            $cp = password_verify($passForm, $pass);
    
            if($cp === true){
                $st = 'success';
                session(['username' => $userForm]);
            }else{
                $st = 'error';
            }
        }else{
            $st = 'error';
        }
        
        $dr = [ 'status' =>  $st ];
        return \Response::json($dr);
    }

}
