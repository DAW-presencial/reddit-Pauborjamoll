<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

       protected $fillable = [
        'content',
    ];

       //---------------------RELACIONES--------------------------

    //User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //Community
    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    //Comment
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
