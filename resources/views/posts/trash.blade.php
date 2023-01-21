<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  </head>
  <body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Trashed Posts</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-dark">All Posts</a>
        </div>

        {{-- @dump(session('msg')) --}}

        @if (session('msg'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        {{-- @dump($posts->count()) --}}
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td> {{ $post->id }} </td>
                    <td> {{ $post->title }} </td>
                    <td>
                        <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-undo"></i></a>

                        <a onclick="return confirm('Are you sure?!')" href="{{ route('posts.forcedelete', $post->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>

                        {{-- <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </form> --}}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No Data Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>

        {{ $posts->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
