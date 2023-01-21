<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  </head>
  <body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Edit Post : <span class="text-danger">{{ $post->title }}</span></h1>
            <a onclick="history.back()" class="btn btn-dark">Return Back</a>
        </div>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" />
                @error('title')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Image</label>
                <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" />
                @error('image')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror

                <img width="80" src="{{ asset($post->image) }}" alt="">
            </div>

            <div class="mb-3">
                <label for="content">Content</label>
                <textarea id="content" name="content" placeholder="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-info px-5" >Update</button>

        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: ['code']
        });
      </script>
  </body>
</html>
