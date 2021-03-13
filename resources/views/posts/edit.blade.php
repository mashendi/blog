@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.update', 'id', $post['id']) }} " method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{ $post['title'] }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control">{{ $post['description'] }}</textarea>
        </div>
        <div class="mb-3">
            <label for="creator" class="form-label">Post Creator</label>
            <input type="text" class="form-control" id="creator" value="{{ $post['posted_by'] }}">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>

@endsection
