<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JurusanMdl;
use App\RombelMdl;

class rombelCon extends Controller
{
    public function datarombel()
    {
        $dataJurusan = JurusanMdl::all();
        
        $dataRombel = RombelMdl::all();

        $data = ['datajurusan' => $dataJurusan, 'datarombel' => $dataRombel];

        return view('dasbor.rombel.datarombel', $data);
    }

    public function tambahdatarombel(Request $request)
    {
        $kdRombel = rand(20001, 29999);

        $namaRombel = $request -> namaRombel;

        $jurusan = $request -> jurusan;
        
        $deks = $request -> deks;

        DB::table('tbl_rombel') -> insert(
            ['kd_rombel' => $kdRombel, 'nama_rombel' => $namaRombel, 'deks' => $deks, 'kd_jurusan' => $jurusan, 'active' => '1']
        );

        $dr = [ 'status' =>  'sukses' ];
        
        return \Response::json($dr);

    }

}
