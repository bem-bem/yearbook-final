<?php

namespace App\Http\Controllers;

use App\Models\classphoto;
use App\Http\Requests\classphotoRequest;
use Illuminate\Support\Facades\File;

class ClassphotoController extends Controller
{
    public function __construct()
    {
        $this->modelName = new classphoto();
    }

    public function index()
    {
        $this->alert();
        return view('classPhoto.table', ['classphoto' => $this->modelName::simplePaginate(10)]);
    }

    public function create()
    {
        return view('classPhoto.form.create');
    }

    public function store(classphotoRequest $request)
    {
        $validated = $request->validated();
        $data = $this->modelName::create($validated);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('classphotos', $data->id . '.' . $file->guessExtension());
            $data->image = $path;
            $data->save();
        }
        return redirect()->route('classphoto.index')->withSuccessMessage($this->created);
    }

    public function edit(classphoto $classphoto)
    {
        return view('classPhoto.form.update', compact('classphoto'));
    }

    public function update(classphotoRequest $request, classphoto $classphoto)
    {
        $validated = $request->validated();
        $classphoto->fill($validated);
        $classphoto->save();
        $path =  public_path("storage\\" . $classphoto->image);
        if ($request->hasFile('image')) {
            if (File::exists($path)) {
                File::delete($path);
            }
            // create new image
            $file = $request->file('image');
            $path = $file->storeAs('classphotos', $classphoto->id . '.' . $file->guessExtension());
            $classphoto->image = $path;
            $classphoto->save();
        }
        return redirect()->route('classphoto.index')->withSuccessMessage($this->updated);
    }

    public function destroy(classphoto $classphoto)
    {
        $path =  public_path("storage\\" . $classphoto->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $classphoto->delete();
        return back()->withSuccessMessage($this->deleted);
    }
}
