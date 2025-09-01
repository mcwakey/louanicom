<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'media' => 'nullable|file|image',
        ]);

        if ($request->hasFile('media')) {
            $data['media_path'] = $request->file('media')->store('uploads','public');
        }

        Hero::create($data);

        return redirect()->route('admin.heroes.index');
    }

    public function edit(Hero $hero)
    {
        return view('admin.heroes.edit', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'media' => 'nullable|file|image',
        ]);

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('uploads','public');
            $data['media_path'] = $path;
        }

        $hero->update($data);

        return redirect()->route('admin.heroes.index');
    }

    public function destroy(Hero $hero)
    {
        $hero->delete();
        return back();
    }
}
