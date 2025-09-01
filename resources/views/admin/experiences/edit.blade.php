@extends('admin.layouts.app')

@section('content')
    <h3>Edit Experience</h3>
    <form method="post" action="{{ route('admin.experiences.update', $experience) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ $experience->title }}"></div>
        <div class="mb-3"><label>Type</label><input class="form-control" name="type" value="{{ $experience->type }}"></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        @if($experience->image_path)<div class="mb-3">Current: <img src="{{ asset('storage/'.$experience->image_path) }}" style="max-width:200px"/></div>@endif
        <div class="mb-3"><label>Link</label><input class="form-control" name="link" value="{{ $experience->link }}"></div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
