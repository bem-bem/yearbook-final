<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Requests\studentRequest;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->modelName = new student();
    }

    public function index()
    {
        $this->alert();
        $this->alert_danger();
        if (isset($_GET['name'])) {
            $student = $this->modelName::where('name', 'LIKE', '%' . $_GET['name'] . '%')->simplePaginate(3);
                 return view('students.table', ['student' => $student]);
        }elseif (isset($_GET['section'])) {
            $student = $this->modelName::where('section', 'LIKE', '%' . $_GET['section'] . '%')->simplePaginate(3);
                return view('students.table', ['student' => $student]);
        }elseif (isset($_GET['course'])) {
            $student = $this->modelName::where('course', 'LIKE', '%' . $_GET['course'] . '%')->simplePaginate(3);
                return view('students.table', ['student' => $student]);
        }elseif (isset($_GET['yearlevel'])) {
            $student = $this->modelName::where('yearlevel', 'LIKE', '%' . $_GET['yearlevel'] . '%')->simplePaginate(3);
                return view('students.table', ['student' => $student]);
        }else{
            return view('students.table', ['student' => $this->modelName::simplePaginate(10)]);
        }
    }

    public function create()
    {
        return view('students.form.create');
    }

    public function store(studentRequest $request)
    {
        $validated = $request->validated();
        $data = $this->modelName::create($validated);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('students', $data->id . '.' . $file->guessExtension());
            $data->image = $path;
            $data->save();
        }
        return redirect()->route('student.index')->withSuccessMessage($this->created);;
    }

    public function edit(student $student)
    {
        return view('students.form.update', compact('student'));
    }

    public function update(studentRequest $request, student $student)
    {
        $validated = $request->validated();
        $student->fill($validated);
        $student->save();
        $path =  public_path("storage\\" . $student->image);
        if ($request->hasFile('image')) {
            if (File::exists($path)) {
                File::delete($path);
            }
            // create new image
            $file = $request->file('image');
            $path = $file->storeAs('students', $student->id . '.' . $file->guessExtension());
            $student->image = $path;
            $student->save();
        }
        return redirect()->route('student.index')->withSuccessMessage($this->updated);
    }

    // public function destroy(student $student)
    // {
    //     $path =  public_path("storage\\" . $student->image);
    //     if (File::exists($path)) {
    //         File::delete($path);
    //     }
    //     $student->delete();
    //     return back()->withSuccessMessage($this->deleted);
    // }
}
