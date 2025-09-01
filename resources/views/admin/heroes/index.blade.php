@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Heroes</h3>
        <a href="{{ route('admin.heroes.create') }}" class="btn btn-primary">New Hero</a>
    </div>

    <table class="table table-striped">
        <thead><tr><th>#</th><th>Title</th><th>Updated</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($heroes as $h)
            <tr>
                <td>{{ $h->id }}</td>
                <td>{{ $h->title }}</td>
                <td>{{ $h->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.heroes.edit', $h) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('admin.heroes.destroy', $h) }}" method="post" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
