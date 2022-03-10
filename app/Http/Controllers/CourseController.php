<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Http\Requests\categoryRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->modelName = new course();
    }

    public function index()
    {
        $this->alert();
        return view('category.course.table' , ['data' => $this->modelName::simplePaginate(10)]);
    }

    public function create()
    {
        return view('category.course.create');
    }

    public function store(categoryRequest $request)
    {
        $validated = $request->validated();
        $this->modelName::create($validated);
        return redirect()->route('course.index')->withSuccessMessage($this->created);
    }


    public function edit(course $course)
    {
        return view('category.course.update' , compact('course'));
    }

    public function update(categoryRequest $request, course $course)
    {
        $validated = $request->validated();
        $course->fill($validated);
        $course->save();
        return redirect()->route('course.index')->withSuccessMessage($this->updated);
    }

    public function destroy(course $course)
    {
        $course->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
