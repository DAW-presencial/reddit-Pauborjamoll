<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    //User
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //Comment
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

}
