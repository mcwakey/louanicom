@extends('admin.layouts.app')

@section('content')
<h2>Menu Items</h2>
<a href="{{ route('admin.menu.create') }}">Create Item</a>
<ul>
@foreach($items as $it)
    <li>{{ $it->position }} - {{ $it->title }} @if(!$it->visible) (hidden) @endif - <a href="{{ route('admin.menu.edit', $it) }}">Edit</a> - <form action="{{ route('admin.menu.destroy', $it) }}" method="post" style="display:inline">@csrf @method('DELETE')<button>Del</button></form></li>
@endforeach
</ul>
@endsection
