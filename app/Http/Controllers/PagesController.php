<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function students()
    {
        return view('pages.students.view' , ['data' => student::simplePaginate(10)]);
    }

    public function select_student($id)
    {
        $student = student::findOrFail($id);
        return view('pages.students.select_student' , compact('student'));
    }
}
