@extends('admin.layouts.app')

@section('content')
    <h3>Create About</h3>
    <form method="post" action="{{ route('admin.abouts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title</label><input class="form-control" name="title"></div>
        <div class="mb-3"><label>Description</label><textarea class="form-control" name="description"></textarea></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        <div class="mb-3"><label>Action Text</label><input class="form-control" name="action_text"></div>
        <div class="mb-3"><label>Action Link</label><input class="form-control" name="action_link"></div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
