<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Formation extends Model
{
    //protected = クラス自身と継承クラスからアクセス可能
    protected $fillable = [
        'formation_name'
    ];

    public function like()
    {
        return $this->hasMany(Like::class, 'formation_id');
    }
}
