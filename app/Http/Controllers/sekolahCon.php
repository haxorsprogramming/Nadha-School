<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SekolahMdl;

class sekolahCon extends Controller
{
    public function datasekolah()
    {
        $dataSekolah = SekolahMdl::all();

        $data = [ 'dataSekolah' =>  $dataSekolah  ];
        
        return view('home.sekolah.datasekolah', $data);
    }
}
