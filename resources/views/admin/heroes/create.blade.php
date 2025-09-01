@extends('admin.layouts.app')

@section('content')
    <h3>Create Hero</h3>
    <form method="post" action="{{ route('admin.heroes.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title</label><input class="form-control" name="title"></div>
        <div class="mb-3"><label>Description</label><textarea class="form-control" name="description"></textarea></div>
        <div class="mb-3"><label>Media (image)</label><input type="file" name="media" class="form-control"></div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
