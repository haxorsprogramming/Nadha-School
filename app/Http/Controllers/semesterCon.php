<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SemesterMdl;

class semesterCon extends Controller
{
    public function datasemester(Request $request)
    {
        $semester = SemesterMdl::all();
        
        $data = ['datasemester' => $semester];

        return view('dasbor.semester.datasemester', $data);
    }
}
