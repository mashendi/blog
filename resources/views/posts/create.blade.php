@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="creator" class="form-label">Post Creator</label>
            <input type="text" class="form-control" id="creator">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>

@endsection
