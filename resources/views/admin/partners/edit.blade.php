@extends('admin.layouts.app')

@section('content')
    <h3>Edit Partner</h3>
    <form method="post" action="{{ route('admin.partners.update', $partner) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ $partner->title }}"></div>
    <div class="mb-3"><label>Position</label><input class="form-control" name="position" type="number" value="{{ $partner->position ?? 0 }}"></div>
    <div class="mb-3"><label>Link (optional)</label><input class="form-control" name="link" type="url" value="{{ $partner->link }}"></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        @if($partner->image_path)<div class="mb-3">Current: <img src="{{ asset('storage/'.$partner->image_path) }}" style="max-width:200px"/></div>@endif
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
