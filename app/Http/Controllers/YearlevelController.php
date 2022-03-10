<?php

namespace App\Http\Controllers;

use App\Models\yearlevel;
use App\Http\Requests\categoryRequest;

class YearlevelController extends Controller
{
    public function __construct()
    {
        $this->modelName = new yearlevel();
    }

    public function index()
    {
        $this->alert();
        return view('category.yearlevel.table' , ['data' => $this->modelName::simplePaginate(10)]);
    }

    public function create()
    {
        return view('category.yearlevel.create');
    }

    public function store(categoryRequest $request)
    {
        $validated = $request->validated();
        $this->modelName::create($validated);
        return redirect()->route('yearlevel.index')->withSuccessMessage($this->created);
    }

    public function edit(yearlevel $yearlevel)
    {
        return view('category.yearlevel.update' , compact('yearlevel'));
    }

    public function update(categoryRequest $request, yearlevel $yearlevel)
    {
        $validated = $request->validated();
        $yearlevel->fill($validated);
        $yearlevel->save();
        return redirect()->route('yearlevel.index')->withSuccessMessage($this->updated);
    }

    public function destroy(yearlevel $yearlevel)
    {
        $yearlevel->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
