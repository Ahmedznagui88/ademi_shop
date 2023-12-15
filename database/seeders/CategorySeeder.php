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
            'Arredamenti',
            'Illuminazione',
            'Oggettistica',
            'Arte',
            'Vini',
            'Liquori',
        ];

        $banners = [
            '/media/imageCategories/watch.jpg',
            '/media/imageCategories/electronics.avif',
            '/media/imageCategories/vinyl.avif',
            '/media/imageCategories/perfume2.avif',
            '/media/imageCategories/salotto.avif',
            '/media/imageCategories/illuminazione.avif',
            '/media/imageCategories/oggettistica.avif',
            '/media/imageCategories/arte 3.jpg',
            '/media/imageCategories/wine.avif',
            '/media/imageCategories/liquore.webp',
            
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
