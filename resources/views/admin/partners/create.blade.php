@extends('admin.layouts.app')

@section('content')
    <h3>Create Partner</h3>
    <form method="post" action="{{ route('admin.partners.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title</label><input class="form-control" name="title"></div>
    <div class="mb-3"><label>Position</label><input class="form-control" name="position" type="number" value="0"></div>
    <div class="mb-3"><label>Link (optional)</label><input class="form-control" name="link" type="url"></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control"></div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
