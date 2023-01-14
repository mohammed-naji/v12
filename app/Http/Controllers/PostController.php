<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::paginate(10);
        // $posts = Post::latest('id')->paginate(10);
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
        $posts = Post::where('title', 'like', '%' . 'quo' . '%')->paginate(10);
        // dd($posts->title);

        // $sql = "SELECT * FROM posts LIMIT 10 OFFSET 0";

        return view('posts.index', compact('posts'));
    }
}
