<?php

namespace App\Http\Controllers;

use App\Models\schoolevent;
use App\Http\Requests\schooleventRequest;
use Illuminate\Support\Facades\DB;

class SchooleventController extends Controller
{
    public function __construct()
    {
        $this->modelName = new schoolevent();
    }
 
    public function index()
    {
        return view('schoolEvents.table' , ['schoolevent' => schoolevent::all()]);
    }

    public function create()
    {
        return view('schoolEvents.form.create');
    }

    public function store(schooleventRequest $request)
    {
        $validated = $request->validated();
        $data = $this->modelName::create($validated);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $files) {
                    $image =  $files->store('schoolevents');
                    DB::table('schooleventimages')->insert([
                        'schoolevent_id' => $data['id'],
                        'image' => $image,
                    ]);
            }
        }
        return back();
    }

    public function edit(schoolevent $schoolevent)
    {
        return view('schoolEvents.form.update' , compact('schoolevent'));
    }

    // public function update(Request $request, $id)
    // {
    //     $data = schoolevent::find($id)->first();
    //     dd($data);
    //     schoolevent::where('id',$data)->update(['title'=>  input('title')]);
    // }

    public function destroy(schoolevent $schoolevent)
    {
        //
    }
}
