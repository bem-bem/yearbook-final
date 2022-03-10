<?php

namespace App\Http\Controllers;

use App\Models\schoolevent;
use App\Models\schooleventimages;
use App\Http\Requests\schooleventRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SchooleventController extends Controller
{
    public function index()
    {
        $this->alert();
        if (isset($_GET['title'])) {
            $schoolevent = schoolevent::where('title', 'LIKE', '%' . $_GET['title'] . '%')->simplePaginate(3);
                 return view('schoolEvents.table', ['schoolevent' => $schoolevent]);
        }
        return view('schoolEvents.table', ['schoolevent' => schoolevent::simplePaginate(10)]);
    }

    public function create()
    {
        return view('schoolEvents.form.create');
    }

    public function store(schooleventRequest $request)
    {
        $validated = $request->validated();
        $data = schoolevent::create($validated);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $files) {
                $image =  $files->store('schoolevents');
                DB::table('schooleventimages')->insert([
                    'schoolevent_id' => $data['id'],
                    'image' => $image,
                ]);
            }
        }
        return redirect()->route('schoolevent.edit' , [$data['id']])->withSuccessMessage($this->created);
    }

    public function edit(schoolevent $schoolevent)
    {
        $this->alert();
        return view('schoolEvents.form.update', compact('schoolevent'));
    }

    public function update(Request $request, schoolevent $schoolevent)
    {
        $validated = $request->validate(['title'=>'required']);
        $schoolevent->fill($validated);
        $schoolevent->save();
        return back()->withSuccessMessage($this->updated);
    }

    public function destroy(schoolevent $schoolevent)
    {
        $images = schooleventimages::where("schoolevent_id", $schoolevent->id)->get();

        foreach ($images as $item) {
            if (File::exists(public_path("storage\\" . $item->image))) {
                File::delete(public_path("storage\\" . $item->image));
            }
        }

        schooleventimages::where('id', $schoolevent->id)->delete();
        schoolevent::where('id', $schoolevent->id)->delete();
        return redirect()->route('schoolevent.index')->withSuccessMessage($this->deleted);
    }
}
