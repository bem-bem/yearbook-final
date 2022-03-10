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
                $result = student::whereIn('id' , $s_id)->delete();
            }
            if ($result) {
                return redirect()->back()->with('success', 'success');
            } else {
                return redirect()->back()->with('error', 'error');
            }
        } else {
            return redirect()->back()->with('error', 'error');
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
                $result = faculty::whereIn('id' , $s_id)->delete();
            }
            if ($result) {
                return redirect()->back()->with('success', 'success');
            } else {
                return redirect()->back()->with('error', 'error');
            }
        } else {
            return redirect()->back()->with('error', 'error');
        }
    }
}
