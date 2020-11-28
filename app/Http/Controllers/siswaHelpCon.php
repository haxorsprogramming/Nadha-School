<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Import model 
use App\SiswaMdl;

class siswaHelpCon extends Controller
{
    public function cekData($nis, $nisn, $email, $hp)
    {
        $nis = SiswaMdl::where('nis', $nis) -> count();
        $nisn = SiswaMdl::where('nisn', $nisn) -> count();
        $email = SiswaMdl::where('email', $email) -> count();
        $hp = SiswaMdl::where('no_hp', $hp) -> count();

        $total = $nis + $nisn + $email + $hp;

        if($total > 0){
            return 'data_duplicate';
        }else{
            return 'data_valid';
        }

    }

}
