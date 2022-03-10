<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;
use App\Models\student;

class Search extends Controller
{
    public function faculty_name(Request $request)
    {
        if (isset($_GET['search'])) {
            $text = $_GET['search'];
            $data = faculty::where('name', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back()->witherror('No Result Found');
            } else {
                return view('pages.faculty.view', ['data' => $data]);
            }
        }
    }

    public function student_name(Request $request)
    {
        if (isset($_GET['search'])) {
            $text = $_GET['search'];
            $data = student::where('name', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back()->witherror('No Result Found');
            } else {
                return view('pages.students.view', ['data' => $data]);
            }
        }
    }

    public function section(Request $request)
    {
        if (isset($_GET['search'])) {
            $text = $_GET['search'];
            $data = student::where('section', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back();
            } else {
                return view('pages.students.view', ['data' => $data]);
            }
        }
    }

    public function course(Request $request)
    {
        if (isset($_GET['search'])) {
            $text = $_GET['search'];
            $data = student::where('course', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back();
            } else {
                return view('pages.students.view', ['data' => $data]);
            }
        }
    }

    public function yearlevel(Request $request)
    {
        if (isset($_GET['search'])) {
            $text = $_GET['search'];
            $data = student::where('yearlevel', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back();
            } else {
                return view('pages.students.view', ['data' => $data]);
            }
        }
    }
}
