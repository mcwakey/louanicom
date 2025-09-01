@extends('admin.layouts.app')

@section('content')
<h2>Edit Menu Item</h2>
<form method="post" action="{{ route('admin.menu.update', $item) }}">
    @csrf @method('PATCH')
    <label>Title <input name="title" value="{{ $item->title }}" required></label>
    <label>Anchor <input name="anchor" value="{{ $item->anchor }}"></label>
    <label>URL <input name="url" value="{{ $item->url }}"></label>
    <label>Position <input name="position" type="number" value="{{ $item->position }}"></label>
    <label>Visible <input name="visible" type="checkbox" {{ $item->visible ? 'checked' : '' }}></label>
    <button>Save</button>
</form>
@endsection
