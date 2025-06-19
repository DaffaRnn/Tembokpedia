<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // GalleryItem::factory()->count(12)->create();

        Gallery::create([
            'title' => 'Karya 1',
            'description' => fake()->text(),
            'image_path' => 'gallery/img1.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 2',
            'description' => fake()->text(),
            'image_path' => 'gallery/img2.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 3',
            'description' => fake()->text(),
            'image_path' => 'gallery/img3.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 1',
            'description' => fake()->text(),
            'image_path' => 'gallery/img1.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 2',
            'description' => fake()->text(),
            'image_path' => 'gallery/img2.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 3',
            'description' => fake()->text(),
            'image_path' => 'gallery/img3.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 1',
            'description' => fake()->text(),
            'image_path' => 'gallery/img1.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 2',
            'description' => fake()->text(),
            'image_path' => 'gallery/img2.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 3',
            'description' => fake()->text(),
            'image_path' => 'gallery/img3.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 1',
            'description' => fake()->text(),
            'image_path' => 'gallery/img1.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 2',
            'description' => fake()->text(),
            'image_path' => 'gallery/img2.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 3',
            'description' => fake()->text(),
            'image_path' => 'gallery/img3.jpg'
        ]);
        
        Gallery::create([
            'title' => 'Karya 1',
            'description' => fake()->text(),
            'image_path' => 'gallery/img1.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 2',
            'description' => fake()->text(),
            'image_path' => 'gallery/img2.jpg'
        ]);

        Gallery::create([
            'title' => 'Karya 3',
            'description' => fake()->text(),
            'image_path' => 'gallery/img3.jpg'
        ]);

    }
}
