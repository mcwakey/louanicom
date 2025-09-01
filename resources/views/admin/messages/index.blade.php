@extends('admin.layouts.app')

@section('content')
    <h3>Messages</h3>
    <table class="table">
        <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Received</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($messages as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->name }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->created_at }}</td>
                <td><a href="{{ route('admin.messages.show', $m) }}" class="btn btn-sm btn-primary">View</a>
                    <form action="{{ route('admin.messages.destroy', $m) }}" method="post" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
