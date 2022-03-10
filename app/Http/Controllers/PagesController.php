<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\faculty;
use App\Models\classphoto;
use App\Models\schoolevent;

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

    public function classphotos()
    {
        if (isset($_GET['name'])) {
            $data = classphoto::where('name', 'LIKE', '%' . $_GET['name'] . '%')->simplePaginate(3);
                 return view('pages.classPhoto.view', ['data' => $data]);
        }elseif (isset($_GET['section'])) {
            $data = classphoto::where('section', 'LIKE', '%' . $_GET['section'] . '%')->simplePaginate(3);
                return view('pages.classPhoto.view', ['data' => $data]);
        }elseif (isset($_GET['course'])) {
            $data = classphoto::where('course', 'LIKE', '%' . $_GET['course'] . '%')->simplePaginate(3);
                return view('pages.classPhoto.view', ['data' => $data]);
        }elseif (isset($_GET['yearlevel'])) {
            $data = classphoto::where('yearlevel', 'LIKE', '%' . $_GET['yearlevel'] . '%')->simplePaginate(3);
                return view('pages.classPhoto.view', ['data' => $data]);
        }else{
            return view('pages.classPhoto.view', ['data' => classphoto::simplePaginate(10)]);
        }
        
        // return view('pages.classPhoto.view' , ['data' => classphoto::simplePaginate(10)]);
    }

    public function select_classphoto($id)
    {
        $classphoto = classphoto::findOrFail($id);
        return view('pages.classphoto.select_classphoto' , compact('classphoto'));
    }

    public function schoolevents ()
    {
        return view('pages.schoolEvents.view' , ['data' => schoolevent::simplePaginate(10)]);
    }

    public function select_schoolevent($id)
    {
        $schoolevent = schoolevent::findOrFail($id);
        return view('pages.schoolEvents.select_schoolevent' , compact('schoolevent'));
    }
}
