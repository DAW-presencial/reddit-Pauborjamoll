<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

       
    //---------------------RELACIONES--------------------------
    //User
    public function users()
    {
        return $this->hasMany(User::class);
    }

   //Post
   public function posts()
   {
       return $this->hasMany(Post::class);
   }

 
   //-----------------------------------------------------------------
}
