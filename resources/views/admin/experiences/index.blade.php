@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Experiences</h3>
        <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">New Experience</a>
    </div>
    <table class="table table-striped">
        <thead><tr><th>#</th><th>Title</th><th>Type</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($items as $it)
            <tr>
                <td>{{ $it->id }}</td>
                <td>{{ $it->title }}</td>
                <td>{{ $it->type }}</td>
                <td>
                    <a href="{{ route('admin.experiences.edit', $it) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('admin.experiences.destroy', $it) }}" method="post" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
