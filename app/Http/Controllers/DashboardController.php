<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classphoto;
use App\Models\schoolevent;
use App\Models\faculty;
use App\Models\student;
use App\Models\yearlevel;
use App\Models\course;
use App\Models\section;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $this->alert();
        return view('dashboard' ,
        [ 
            'classphoto' =>  classphoto::count(),
            'schoolevent' =>  schoolevent::count(),
            'faculty' =>  faculty::count(),
            'student' =>  student::count(),
            'yearlevel' =>  yearlevel::count(),
            'course' =>  course::count(),
            'section' =>  section::count(),
        ]);
    }
}
