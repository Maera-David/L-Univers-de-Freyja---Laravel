<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lithoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('litho')->insert([
            'name' => 'Amazonite',
            'description' => "L'amazonite est une pierre naturelle très apaisante. Elle est rattachée au chakra du cœur. L'une des propriétés de l'amazonite est de favoriser le relâchement des émotions. L'amazonite est rattachée également au chakra de la gorge, elle renforce la communication. Elle permet à la fois d’aligner le corps physique avec le corps éthérique et d’équilibrer les énergies masculines et les énergies féminines. Minéraux qui nous donnent la capacité de voir les deux cotés d’un problème ou différents points de vue. Minéraux qui favorisent la manifestation de l’amour universel et apporte la certitude des sentiments de tendresse réciproques vers la personne aimée. L'amazonite aide aussi à accéder au souvenirs anciens même des vies antérieures."
        ]);
    }
}
