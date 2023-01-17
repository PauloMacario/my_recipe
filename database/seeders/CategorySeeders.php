<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'image_id' => 1,
                'name' => 'Prato principal',
            ],
            [
                'image_id' => 2,
                'name' => 'Salada',
            ],
            [
                'image_id' => 3,
                'name' => 'Molhos',
            ],
            [
                'image_id' => 4,
                'name' => 'Sobremesa',
            ],
        ]);
    }
}
