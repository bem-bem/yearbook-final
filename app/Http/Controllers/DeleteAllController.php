<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\schoolevent;
use App\Models\schooleventimages;

class DeleteAllController extends Controller
{
    // public function event_images(Request $request , $id)
    // {
    //     $schoolevent = schoolevent::findOrFail($id)->first();
    //     $images = schooleventimages::where("schoolevent_id", $schoolevent->id)->get();

    //     foreach ($images as $item) {
    //         if (File::exists(public_path("storage\\" . $item->image))) {
    //             File::delete(public_path("storage\\" . $item->image));
    //         }
    //     }

    //     return back();
    // }
}
