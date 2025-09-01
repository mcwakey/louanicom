@extends('admin.layouts.app')

@section('content')
<h2>Create Menu Item</h2>
<form method="post" action="{{ route('admin.menu.store') }}">
    @csrf
    <label>Title <input name="title" required></label>
    <label>Anchor <input name="anchor"></label>
    <label>URL <input name="url"></label>
    <label>Position <input name="position" type="number" value="0"></label>
    <label>Visible <input name="visible" type="checkbox" checked></label>
    <button>Save</button>
</form>
@endsection
