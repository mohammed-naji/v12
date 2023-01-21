<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
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

        dd($in->user);
    }

    public function users()
    {
        $users = User::with('insurance')->get();

        return view('relations.users', compact('users'));
    }
}
