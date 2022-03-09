<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schooleventimages;
use App\Models\schoolevent;
use Illuminate\Support\Facades\DB;

class StoreMultipleImage extends Controller
{
    public function __invoke(Request $request , $id)
    {
        $request->validate(['image'=>'required']);
        $data = schoolevent::findOrFail($id);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $files) {
                    $image =  $files->store('schoolevents');
                    DB::table('schooleventimages')->insert([
                        'schoolevent_id' => $data->id,
                        'image' => $image,
                    ]);
            }
        }

        return back()->withSuccessMessage($this->created);;
    }
}
