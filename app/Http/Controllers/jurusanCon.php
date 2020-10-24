<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JurusanMdl;

class jurusanCon extends Controller
{

    public function datajurusan(Request $request)
    {
        $dataJurusan = JurusanMdl::all();
        
        $data = ['dataJurusan' => $dataJurusan];

        return view('dasbor.jurusan.datajurusan', $data);
    }

    public function tambahdatajurusan(Request $request)
    {
        $kdJurusan = rand(10001, 19999);

        $namaJurusan = $request -> namaJurusan;
        
        $prefix = $request -> prefix;
        
        $deks = $request -> deks;

        DB::table('tbl_jurusan') -> insert(
            ['kd_jurusan' => $kdJurusan, 'nama_jurusan' => $namaJurusan, 'prefix' => $prefix, 'deks' => $deks, 'active' => '1']
        );

        $dr = [ 'status' =>  'sukses' ];
        
        return \Response::json($dr);
    }

}
