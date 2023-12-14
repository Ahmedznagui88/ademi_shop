<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            'public/imageCategories/watch.jpg',
            'public/imageCategories/electronics.avif',
            'public/imageCategories/vinyl.avif',
            'public/imageCategories/perfume2.avif',
            'public/imageCategories/salotto.avif',
            'public/imageCategories/illuminazione.avif',
            'public/imageCategories/oggettistica.avif',
            'public/imageCategories/arte 3.jpg',
            'public/imageCategories/wine.avif',
            'public/imageCategories/liquore.webp',
        ];
        foreach ($banners as $banner) {
            DB::table('categories')->insert([
                'path' => $banner,
            ]);
        }
    }
}
