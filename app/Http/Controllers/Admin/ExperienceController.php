<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $items = Experience::all();
        return view('admin.experiences.index', compact('items'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'type' => 'nullable|string',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        Experience::create($data);

        return redirect()->route('admin.experiences.index');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'type' => 'nullable|string',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        $experience->update($data);

        return redirect()->route('admin.experiences.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back();
    }
}
