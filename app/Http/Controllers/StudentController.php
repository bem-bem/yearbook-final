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
        return view('students.table', ['student' => $this->modelName::simplePaginate(10)]);
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

    public function destroy(student $student)
    {
        $path =  public_path("storage\\" . $student->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $student->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
