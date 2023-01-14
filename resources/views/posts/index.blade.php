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
        <h1>All Posts</h1>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td> {{ $post->id }} </td>
                    <td> {{ $post->title }} </td>
                    <td> <img width="80" src="{{ $post->image }}" alt=""> </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        {{ $posts->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
