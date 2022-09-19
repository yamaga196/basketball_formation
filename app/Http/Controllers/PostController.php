<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->formation_id = $request->id;
        $post->thoughts = $request->thoughts;
        $post->save();

        return redirect()->back();
    }
}
