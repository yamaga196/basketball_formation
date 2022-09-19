<?php

namespace App\Http\Controllers;

//Modelsを使う
use App\Models\Formation;
use App\Models\Post;
use App\Models\Like;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Formation_listController extends Controller
{
    public function index()
    {
        $formations = DB::select('select * from formations');
        $formations = ['formations' => $formations];
        return view('articles.formation_list', $formations);
    }

    public function show($id){
        $formation_data = Formation::find($id);
        $posts = DB::select('select * from posts');
        $user = Auth::id();
        $likes = Like::where('users_id', $user)->where('formation_id', $id)->first();
        return view('articles.formation', compact('formation_data', 'posts', 'likes'));
    }
}
