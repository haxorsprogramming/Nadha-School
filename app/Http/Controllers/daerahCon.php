<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProvinsiMdl;
use App\KabupatenMdl;
use App\KecamatanMdl;
use App\KelurahanMdl;

class daerahCon extends Controller
{
    
    public function provinsi()
    {
        $provinsi = ProvinsiMdl::all();
        $dr = [ 'provinsi' =>  $provinsi ];
        return \Response::json($dr);
    }

    public function provinsidetail($idprovinsi)
    {
        $kabupaten = KabupatenMdl::where('id_prov' , $idprovinsi) -> get();
        $dr = ['kabupaten' => $kabupaten];
        return \Response::json($dr);
    }

    public function kabupatendetail($idkabupaten)
    {
        $kecamatan = KecamatanMdl::where('id_kab', $idkabupaten) -> get();
        $dr = ['kecamatan' => $kecamatan];
        return \Response::json($dr);
    }

    public function kecamatandetail($idkecamatan)
    {
        $kelurahan = KelurahanMdl::where('id_kec', $idkecamatan) -> get();
        $dr = ['kelurahan' => $kelurahan];
        return \Response::json($dr);
    }

}
