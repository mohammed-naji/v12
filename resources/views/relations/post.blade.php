<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container text-center my-5">
        {{-- &lt;p&gt; --}}
        <h1>{{ $post->title }}</h1>
        <img class="w-50 mb-4" src="{{ asset($post->image) }}" alt="">
        {{-- <p>{{ $post->content }}</p> --}}
        <div>{!! $post->content !!}</div>

        <hr>

        <div class="w-75 text-start mx-auto">
            <h3>Comments ({{ $post->comments->count() }})</h3>
            @foreach ($post->comments as $comment)
                {{-- @dump($loop) --}}
                <h5>{{ $comment->user->name }}</h5>
                <p>{{ $comment->comment }}</p>
                {{-- @if ($loop->last)

                @else
                    <hr>
                @endif --}}
                @if (!$loop->last)
                <hr>
                @endif

            @endforeach

            <hr>

            <h3>Add Comment</h3>
            <form action="{{ route('post.add_comment') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $post->id }}" name="post_id">
            <textarea required name="comment" class="form-control mb-3" rows="4" placeholder="Comment here.."></textarea>
            <button class="btn btn-dark">Place Comment</button>
            </form>
        </div>
    </div>

</body>
</html>
