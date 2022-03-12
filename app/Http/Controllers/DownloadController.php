<?php

namespace App\Http\Controllers;

use App\Models\classphoto;
use App\Models\faculty;
use App\Models\schooleventimages;
use Illuminate\Http\Request;
use App\Models\student;
class DownloadController extends Controller
{
    public function student_img($id)
    {
        $img = student::findOrFail($id);
       return response()->download(public_path('storage/' . $img->image));
    }

    public function faculty_img($id)
    {
        $img = faculty::findOrFail($id);
       return response()->download(public_path('storage/' . $img->image));
    }
    
    public function classphoto_img($id)
    {
        $img = classphoto::findOrFail($id);
       return response()->download(public_path('storage/' . $img->image));
    }

    public function schoolevent_img($id)
    {
        $img = schooleventimages::findOrFail($id);
       return response()->download(public_path('storage/' . $img->image));
    }

}