<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post1 = new Post;
        $post1->id = 1;
        $post1->title = "ChatGPT";
        $post1->content = "Pues aún no lo he probado pero espérate";
        $post1->save();
        
        $post2 = new Post;
        $post2->id = 2;
        $post2->title = "Chess";
        $post2->content = "Literalmente el mejor juego competitivo y más antiguo de la história";
        $post2->save();
        
    }
}
