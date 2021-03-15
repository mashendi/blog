@extends('layouts.app')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <p class="card-text">
                <strong>Title :- </strong> {{ $post->title }}
            </p>
            <p class="card-text"><strong>Description :- </strong> {{ $post->description }}</p>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Name :- </strong> {{ $post->user->name }}</p>
            <p class="card-text"><strong>Email :- </strong> {{ $post->user->email }}</p>
            <p class="card-text"><strong>Created At :- </strong> {{ $post->created_at->format('l jS \\of F Y h:i:s A') }}
            </p>
        </div>
    </div>
@endsection
