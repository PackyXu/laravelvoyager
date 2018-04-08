<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    //
    public function index()
    {
        $studentInfo = DB::table('students')->paginate(100);

        return view('student.index',['studentInfo' => $studentInfo]);
    }
}
