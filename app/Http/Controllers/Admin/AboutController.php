<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'action_text' => 'nullable|string',
            'action_link' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        About::create($data);

        return redirect()->route('admin.abouts.index');
    }

    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'action_text' => 'nullable|string',
            'action_link' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        $about->update($data);

        return redirect()->route('admin.abouts.index');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return back();
    }
}
