<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\faculty;
use App\Models\classphoto;

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

    public function facultys()
    {
        return view('pages.faculty.view' , ['data' => faculty::simplePaginate(10)]);
    }

    public function select_faculty($id)
    {
        $faculty = faculty::findOrFail($id);
        return view('pages.faculty.select_faculty' , compact('faculty'));
    }

    public function classphoto()
    {
        return view('pages.classPhoto.view' , ['data' => classphoto::simplePaginate(10)]);
    }

    public function select_classphoto($id)
    {
        $classphoto = classphoto::findOrFail($id);
        return view('pages.classphoto.select_classphoto' , compact('classphoto'));
    }
}
