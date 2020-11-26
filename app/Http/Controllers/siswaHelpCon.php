<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// Import model 
use App\SiswaMdl;

class siswaHelpCon extends Controller
{
    
    public function cekNis($nis)
    {
        $totalNis = SiswaMdl::where('nis', $nis) -> count();
        if($totalNis > 0){
            return true;
        }else{
            return false;
        }
    }

}
