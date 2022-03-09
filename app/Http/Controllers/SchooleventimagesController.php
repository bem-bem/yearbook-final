<?php

namespace App\Http\Controllers;

use App\Models\schooleventimages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class SchooleventimagesController extends Controller
{

    public function update(Request $request,  $id)
    {
        $request->validate(['image'=>'required']);
        $schooleventimages = schooleventimages::find($id)->first();
        $path = public_path("storage\\" . $schooleventimages->image);
        if ($request->hasFile('image')) {
            if (File::exists($path)) {
                File::delete($path);
            }
            $filename = $request->file('image')->store('schoolevents');
        } else {
            $filename = $schooleventimages->image;
        }

         DB::table('schooleventimages')->where('id', $schooleventimages->id)->update([
            'image' => $filename,
        ]);

        return back()->withSuccessMessage($this->updated);
    }

    public function destroy($id)
    {
        $schooleventimages = schooleventimages::find($id);
        $path =  public_path("storage\\" . $schooleventimages->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $schooleventimages->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
