<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Like;
use App\Models\User;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $formation_likes = new Like();
        $formation_likes->users_id = Auth::id();
        $formation_likes->formation_id = $request->id;
        $formation_likes->save();

        return redirect()->back();
    }

    public function unlike(Request $request)
    {
        $user = Auth::user()->id;
        $formation_likes = Like::where('users_id', $user)->where('formation_id', $request->id)->first();
        $formation_likes->delete();
        return back();
    }
}
