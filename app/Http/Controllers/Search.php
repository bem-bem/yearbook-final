<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\student;
class Search extends Controller
{
    public function student_name(Request $request)
    {
        $request->validate([
            'search' => 'bail|required'
        ]);

        if (isset($_GET['search'])) {
            $text = trim($_GET['search']);
            $data = student::where('name', 'LIKE', '%' . $text . '%')->simplePaginate(3);
            if (count($data) < 1) {
                return back()->witherror('No Result Found');
            } else {
                return view('pages.students.view', ['data' => $data]);
            }
        }
    }
}
