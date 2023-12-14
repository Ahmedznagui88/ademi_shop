<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Orologeria',
            'Elettronica',
            'Vinili',
            'Profumi',
            'Arredamento',
            'Illuminazione',
            'Oggettistica',
            'Arte',
            'Vini',
            'Liquori',
        ];

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
        
        foreach ($categories as $key => $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'path' => $banners[$key],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
