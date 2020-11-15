<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilityCon extends Controller
{
    public function getAgama()
    {
        $agama = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Kepercayaan kepada Tuham TME'];

        $dr = [ 'provinsi' =>  $agama ];
        
        return \Response::json($dr);
    }
}
