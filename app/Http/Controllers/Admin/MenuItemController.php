<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        $items = MenuItem::orderBy('position')->get();
        return view('admin.menu.index', compact('items'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string',
            'anchor'=>'nullable|string',
            'url'=>'nullable|url',
            'position'=>'nullable|integer',
            'visible'=>'nullable|boolean',
        ]);
        $data['visible'] = $request->has('visible');
        MenuItem::create($data);
        return redirect()->route('admin.menu.index');
    }

    public function edit(MenuItem $menu)
    {
        return view('admin.menu.edit', ['item'=>$menu]);
    }

    public function update(Request $request, MenuItem $menu)
    {
        $data = $request->validate([
            'title'=>'required|string',
            'anchor'=>'nullable|string',
            'url'=>'nullable|url',
            'position'=>'nullable|integer',
            'visible'=>'nullable|boolean',
        ]);
        $data['visible'] = $request->has('visible');
        $menu->update($data);
        return redirect()->route('admin.menu.index');
    }

    public function destroy(MenuItem $menu)
    {
        $menu->delete();
        return back();
    }
}
