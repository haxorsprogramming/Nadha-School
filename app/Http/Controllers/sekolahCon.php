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

    public function detaildatasekolah(Request $request)
    {
        $kodeData = $request -> id;

        $dataDetail = SekolahMdl::where('kd_data',$kodeData) -> first();
        
        $dr = [ 'respon' =>  $dataDetail ];
        
        return \Response::json($dr);
    }

    public function updatedatasekolah(Request $request)
    {
        $dr = [ 'respon' => 'sukses'];

        return \Response::json($dr);
    }

}
