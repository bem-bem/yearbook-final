<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\student;
use App\Models\faculty;

class DeleteAllController extends Controller
{
    public function delete_student(Request $request)
    {
        $ids = $request->input('ids');
        if (!empty($ids)) {
            foreach ($ids as $images) {
                $s_id = student::find($images);
                $path = public_path("storage\\" . $s_id->image);
                if (File::exists($path)) {
                    File::delete($path);
                }
                student::whereIn('id', $s_id)->delete();
            }
            return back()->withSuccessMessage($this->deleted);
        } else {
            return back()->with('danger', 'Please select atleast one record');
        }
    }

    public function delete_faculty(Request $request)
    {
        $ids = $request->input('ids');
        if (!empty($ids)) {
            foreach ($ids as $images) {
                $s_id = faculty::find($images);
                $path = public_path("storage\\" . $s_id->image);
                if (File::exists($path)) {
                    File::delete($path);
                }
                faculty::whereIn('id', $s_id)->delete();
            }
            return back()->withSuccessMessage($this->deleted);
        } else {
            return back()->with('danger', 'Please select atleast one record');
        }
    }
}
