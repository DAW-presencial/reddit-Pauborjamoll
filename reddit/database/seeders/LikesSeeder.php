<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Like;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $like1 = new Like;
        $like1->id=1;
        $like1->positivos=10;
        $like1->negativos=2;
        $like1->save();

        $like2 = new Like;
        $like2->id=2;
        $like2->positivos=100;
        $like2->negativos=1;
        $like2->save();
    }
}
