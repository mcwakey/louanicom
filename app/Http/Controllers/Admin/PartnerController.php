<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
    $items = Partner::orderBy('position')->get();
        return view('admin.partners.index', compact('items'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image',
            'position' => 'nullable|integer',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        $data['position'] = $data['position'] ?? 0;
        Partner::create($data);

        return redirect()->route('admin.partners.index');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image',
            'position' => 'nullable|integer',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads','public');
        }

        $data['position'] = $data['position'] ?? $partner->position ?? 0;
        $partner->update($data);

        return redirect()->route('admin.partners.index');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        return back();
    }
}
