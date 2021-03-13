@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center justify-items-center">
        <a href="{{ route('posts.create') }}" class="btn btn-success p-3">Create Post</a>
        {{-- <x-Button type="Success">Create</x-Button> --}}
    </div>

    <div class="row d-flex justify-content-center justify-items-center mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">posted by</th>
                    <th scope="col">created at</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td scope="col">
                            <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', ['post' => $post['id']]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger"></input>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
