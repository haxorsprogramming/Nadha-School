<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilityCon extends Controller
{

    public function get_agama()
    {
        $agama = array('Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Kepercayaan kepada Tuham YME');
        return $agama;
    }

    public function get_golongan_darah()
    {
        $golonganDarah = array('AB-', 'B-', 'AB+', 'A-', 'O-', 'B+', 'A+', 'O+');
        return $golonganDarah;
    }

    public function get_status_orang_tua()
    {
        $statusOrangTua = array('Lengkap', 'Yatim (Tidak ada ayah)', 'Piatu (Tidak ada ibu)', 'Yatim Piatu (Tidak ada ayah & ibu)', 'Orang tua angkat');
        return $statusOrangTua;
    }

}
