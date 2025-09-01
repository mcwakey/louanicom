@extends('admin.layouts.app')

@section('content')
    <h3>Create Experience</h3>
    <form method="post" action="{{ route('admin.experiences.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title</label><input class="form-control" name="title"></div>
        <div class="mb-3"><label>Type</label><input class="form-control" name="type"></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        <div class="mb-3"><label>Link</label><input class="form-control" name="link"></div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
