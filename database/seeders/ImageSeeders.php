<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'type' => 'CG',
                'name' => 'principal',
                'extension' => '.png',
                'patch' => 'app/storage/img/CG/',
                'icon' => '<i class="fa fa-principal"></i>',
            ],
            [
                'type' => 'CG',
                'name' => 'salada',
                'extension' => '.png',
                'patch' => 'app/storage/img/CG/',
                'icon' => '<i class="fa fa-salada"></i>',
            ],
            [
                'type' => 'CG',
                'name' => 'molhos',
                'extension' => '.png',
                'patch' => 'app/storage/img/CG/',
                'icon' => '<i class="fa fa-molhos"></i>',
            ],
            [
                'type' => 'CG',
                'name' => 'sobremesa',
                'extension' => '.png',
                'patch' => 'app/storage/img/CG/',
                'icon' => '<i class="fa fa-sobremesa"></i>',
            ],
            [
                'type' => 'RC',
                'name' => 'macarrao_carbonara',
                'extension' => '.png',
                'patch' => 'app/storage/img/RC/',
                'icon' => null,
            ],
            [
                'type' => 'RC',
                'name' => 'sorvete',
                'extension' => '.png',
                'patch' => 'app/storage/img/RC/',
                'icon' => null,
            ],
        ]);
    }
}
