<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SekolahMdl;

class sekolahCon extends Controller
{
    public function datasekolah()
    {
        $dataSekolah = SekolahMdl::all();

        $data = [ 'dataSekolah' =>  $dataSekolah ];

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
        // {'captionData':captionData, 'kdData':kdData}
        $namaData = $request -> captionData;
        $kdData = $request -> kdData;
        DB::table('tbl_data_sekolah') -> where('kd_data', $kdData) -> update(['caption' => $namaData]);
        $dr = [ 'respon' => 'sukses'];

        return \Response::json($dr);
    }

}
