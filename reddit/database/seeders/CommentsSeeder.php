<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment1 = new Comment;
        $comment1->id = 1;
        // $comment1->name = "";
        $comment1->save();

        $comment2 = new Comment;
        $comment2->id = 2;
        // $comment1->name = "";
        $comment2->save();
    }
}
