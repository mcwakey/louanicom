@extends('admin.layouts.app')

@section('content')
    <h3>Message from {{ $message->name }}</h3>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Received:</strong> {{ $message->created_at }}</p>
    <div class="card"><div class="card-body">{{ $message->message }}</div></div>
@endsection
