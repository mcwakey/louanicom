@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Partners</h3>
        <a href="{{ route('admin.partners.create') }}" class="btn btn-primary">New Partner</a>
    </div>
    <table class="table table-striped">
    <thead><tr><th>#</th><th>Title</th><th>Position</th><th>Link</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($items as $it)
            <tr>
                <td>{{ $it->id }}</td>
        <td>{{ $it->title }}</td>
        <td>{{ $it->position }}</td>
        <td>@if($it->link)<a href="{{ $it->link }}" target="_blank">Link</a>@endif</td>
                <td>
                    <a href="{{ route('admin.partners.edit', $it) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('admin.partners.destroy', $it) }}" method="post" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
