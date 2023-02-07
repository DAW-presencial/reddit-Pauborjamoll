<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;
class CommunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $community1 = new Community;
        $community1->title = "IA's";
        $community1->description = "Opiniones sobre las revolucionárias IA's de la actualidad";
        $community1->save();

        $community2 = new Community;
        $community2->title = "Juegos competitivos";
        $community2->description = "Comenta cualquier juego desafiante de tipo competitivo";
        $community2->save();
    }
}
