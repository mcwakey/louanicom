@extends('admin.layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Quick links to manage site sections.</p>
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="{{ route('admin.heroes.index') }}">Hero</a>
        <a class="list-group-item list-group-item-action" href="{{ route('admin.abouts.index') }}">About</a>
        <a class="list-group-item list-group-item-action" href="{{ route('admin.experiences.index') }}">Experiences</a>
        <a class="list-group-item list-group-item-action" href="{{ route('admin.partners.index') }}">Partners</a>
        <a class="list-group-item list-group-item-action" href="{{ route('admin.messages.index') }}">Messages</a>
    </div>
@endsection
