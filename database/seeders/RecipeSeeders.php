<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'category_id' => 1,
                'image_id' => 5,
                'name' => 'Carbonara',
                'ingredients' => 'Macarrão;bacon;ovos;azeite',
                'preparation_method' => 'misturar na panela;esquntar;servir',
                'extra_note' => 'servir quente',
                'estimated_time' => '00:20:00',
                'people_served' => 3,
                'tips' => null,
            ],
            [
                'category_id' => 4,
                'image_id' => 6,
                'name' => 'sorvete baunilha',
                'ingredients' => 'Leite;corante;baunilha',
                'preparation_method' => 'Misturar tudo no balde;por pra gelar',
                'extra_note' => 'servir em taças',
                'estimated_time' => '03:00:00',
                'people_served' => 5,
                'tips' => 'colocar coberturas',
            ],
        ]);
    }
}
