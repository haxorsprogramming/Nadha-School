<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilityCon extends Controller
{

    public function getAgama()
    {
        $agama = array('Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Kepercayaan kepada Tuham YME');
        return $agama;
    }

    public function getGolonganDarah()
    {
        $golonganDarah = array('AB-', 'B-', 'AB+', 'A-', 'O-', 'B+', 'A+', 'O+');
        return $golonganDarah;
    }

}
