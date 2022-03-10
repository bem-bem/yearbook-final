<?php

namespace App\Http\Controllers;

use App\Models\section;
use App\Http\Requests\categoryRequest;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct()
    {
        $this->modelName = new section();
    }

    public function index()
    {
        $this->alert();
        return view('category.section.table' , ['data' => $this->modelName::simplePaginate(10)]);
    }

    public function create()
    {
        return view('category.section.create');
    }

    public function store(categoryRequest $request)
    {
        $validated = $request->validated();
        $this->modelName::create($validated);
        return redirect()->route('section.index')->withSuccessMessage($this->created);
    }

    public function edit(section $section)
    {
        return view('category.section.update' , compact('section'));
    }

    public function update(categoryRequest $request, section $section)
    {
        $validated = $request->validated();
        $section->fill($validated);
        $section->save();
        return redirect()->route('section.index')->withSuccessMessage($this->updated);
    }

    public function destroy(section $section)
    {
        $section->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
