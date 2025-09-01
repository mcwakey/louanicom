@extends('admin.layouts.app')

@section('content')
    <h3>Edit Hero</h3>
    <form method="post" action="{{ route('admin.heroes.update', $hero) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ $hero->title }}"></div>
        <div class="mb-3"><label>Description</label><textarea class="form-control" name="description">{{ $hero->description }}</textarea></div>
        <div class="mb-3"><label>Media (image)</label><input type="file" name="media" class="form-control"></div>
        @if($hero->media_path)<div class="mb-3">Current: <img src="{{ asset('storage/'.$hero->media_path) }}" style="max-width:200px"/></div>@endif
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
