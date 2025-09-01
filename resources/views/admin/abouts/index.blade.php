@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Abouts</h3>
        <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary">New About</a>
    </div>

    <table class="table table-striped">
        <thead><tr><th>#</th><th>Title</th><th>Updated</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($abouts as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->title }}</td>
                <td>{{ $a->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.abouts.edit', $a) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('admin.abouts.destroy', $a) }}" method="post" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
