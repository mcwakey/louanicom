@extends('admin.layouts.app')

@section('content')
    <h3>Edit About</h3>
    <form method="post" action="{{ route('admin.abouts.update', $about) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ $about->title }}"></div>
        <div class="mb-3"><label>Description</label><textarea class="form-control" name="description">{{ $about->description }}</textarea></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        @if($about->image_path)<div class="mb-3">Current: <img src="{{ asset('storage/'.$about->image_path) }}" style="max-width:200px"/></div>@endif
        <div class="mb-3"><label>Action Text</label><input class="form-control" name="action_text" value="{{ $about->action_text }}"></div>
        <div class="mb-3"><label>Action Link</label><input class="form-control" name="action_link" value="{{ $about->action_link }}"></div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
