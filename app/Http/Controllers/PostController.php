<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::paginate(10);
        $posts = Post::latest('id')->paginate(10);
        // $posts = Post::orderBy('id', 'desc')->paginate(10);
        // $posts = Post::orderByDesc('id')->paginate(10);
        // $posts = Post::orderByDesc('id')->simplePaginate();
        // $posts = Post::orderByDesc('id')->paginate(10);
        // $posts = Post::find(10);
        // $posts = Post::where('id', 10)->get();
        // $posts = Post::where('id', 10)->first();
        // $posts = Post::find(5);
        // if(!$posts) {
        //    abort(404);
        // }
        // $posts = Post::findOrFail(5);
        // $posts = Post::where('id', 10000)->firstOrFail();
        // $posts = Post::where('title', 'like', '%' . 'quo' . '%')->paginate(10);
        // dd($posts->title);

        // $sql = "SELECT * FROM posts LIMIT 10 OFFSET 0";

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        // 1. Validate

        // 2. File Upload
        $image = $request->file('image')->store('uploads/posts', 'custom');

        // 3. Store in Database
        // Using Query Builder
        // DB::table('posts')->insert([
        //     'title' => $request->title,
        //     'image' => $image,
        //     'content' => $request->content
        // ]);

        // Using Elqouent ORM
        // -- Using Object
        // $post = new Post();
        // $post->title = $request->title;
        // $post->image = $image;
        // $post->content = $request->content;
        // $post->save();

        // -- Using static Create Method
        Post::create([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content
        ]);


        // 4. Redirect to Another Page
        return redirect()->route('posts.index')->with('msg', 'Post Added Successfully')->with('type', 'success');
        // return redirect()->route('posts.index')->with('msg', 'Post Added Successfully')->with('type', 'info');
        // return redirect()->route('posts.index')->with('msg', 'Post Added Successfully')->with('type', 'danger');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->route('posts.index')->with('msg', 'Post Deleted Successfully')->with('type', 'danger');
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->latest('id')->paginate(10);

        return view('posts.trash', compact('posts'));
    }

    public function restore($id)
    {
        Post::onlyTrashed()->find($id)->restore();

        return redirect()->route('posts.index')->with('msg', 'Post Restored Successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
        Post::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('posts.index')->with('msg', 'Post Deleted Permanently Successfully')->with('type', 'warning');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // dd($post);

        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $image = $post->image;
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads/posts', 'custom');
        }

        $post->update([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post Updated Successfully')->with('type', 'info');
    }
}
