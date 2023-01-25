<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Insurance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);

        // 1 - 1
        // primary hasOne second
        // second belongsTo primary

        // find, findOrFail, first, firstOrFail, get, all, paginate, simplepaginate

        // $in = Insurance::where('user_id', $user->id)->first();

        // dd($user->insurance);

        $in = Insurance::find(1);

        // dd($in->user);
    }

    public function users()
    {
        $users = User::with('insurance')->get();

        return view('relations.users', compact('users'));
    }

    public function one_to_many()
    {
        // $post = Post::find(1);

        // dd($post->comments);

        // $comment = Comment::find(1);


        // dd($comment->post->title);
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        return view('relations.post', compact('post'));
    }

    public function add_comment(Request $request)
    {
        // dd($request->all());
        Comment::create([
            'comment' => $request->comment,
            'user_id' => 2,
            'post_id' => $request->post_id
        ]);

        return redirect()->back();
    }
}
