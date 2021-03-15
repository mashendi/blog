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
                @foreach ($posts as $i => $post)
                    <tr>
                        <th scope="row">{{ $i + 1 + ($posts->currentPage() - 1) * $posts->perPage() }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                        <td scope="col">
                            <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', ['post' => $post['id']]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST"
                                class="d-inline" id="del-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#postDelete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
    <!-- Modal -->
    <div class="modal fade" id="postDelete" tabindex="-1" aria-labelledby="postDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postDeleteLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure? You want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="del-btn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#del-btn").on('click', function(e) {
                e.preventDefault();
                $("#del-form").submit();
            })
        })

    </script>
@endsection
