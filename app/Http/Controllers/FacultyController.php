<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use App\Http\Requests\facultyRequest;
use Illuminate\Support\Facades\File;

class FacultyController extends Controller
{
    public function __construct()
    {
        $this->modelName = new faculty();
    }

    public function index()
    {
        $this->alert();
        $this->alert_danger();
        if (isset($_GET['name'])) {
            $faculty = $this->modelName::where('name', 'LIKE', '%' . $_GET['name'] . '%')->simplePaginate(3);
                 return view('facultys.table', ['faculty' => $faculty]);
        }
        return view('facultys.table' , ['faculty'=>$this->modelName::simplePaginate(10)]);
    }

    public function create()
    {
        return view('facultys.forms.create');
    }

    public function store(facultyRequest $request)
    {
        $validated = $request->validated();
        $data = $this->modelName::create($validated);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('facultys', $data->id . '.' . $file->guessExtension());
            $data->image = $path;
            $data->save();
        }
        return redirect()->route('faculty.index')->withSuccessMessage($this->created);
    }

    public function edit(faculty $faculty)
    {
        return view('facultys.forms.update', compact('faculty'));
    }

    public function update(facultyRequest $request, faculty $faculty)
    {
        $validated = $request->validated();
        $faculty->fill($validated);
        $faculty->save();
        $path =  public_path("storage\\" . $faculty->image);
        if ($request->hasFile('image')) {
            if (File::exists($path)) {
                File::delete($path);
            }
            // create new image
            $file = $request->file('image');
            $path = $file->storeAs('facultys', $faculty->id . '.' . $file->guessExtension());
            $faculty->image = $path;
            $faculty->save();
        }
        return redirect()->route('faculty.index')->withSuccessMessage($this->updated);
    }

    // public function destroy(faculty $faculty)
    // {
    //     $path =  public_path("storage\\" . $faculty->image);
    //     if (File::exists($path)) {
    //         File::delete($path);
    //     }
    //     $faculty->delete();
    //     return back()->withSuccessMessage($this->deleted);
    // }
}
