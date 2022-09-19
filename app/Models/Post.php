<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected = クラス自身と継承クラスからアクセス可能
    protected $fillable = [
        'formation_id', 'thoughts'
    ];
}
