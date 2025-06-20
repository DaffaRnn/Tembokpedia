<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Program::factory(10)->create();

         $programs = [
            [
                'title' => 'Melukis Tembok Serdam',
                'description' => 'Reiciendis aliquam officiis tenetur ipsum quo minima repudiandae. Modi itaque quibusdam ratione libero iusto. Exercitationem tempora nihil aliquam nisi quibusdam ipsa.',
                'location' => 'Tanjungbalai',
                'date' => '2025-03-16',
                'activities' => ['velit', 'quae', 'rem'],
                'status' => 'Sedang Berlangsung',
                'image_path' => 'programs/default_1.jpg',
            ],
            [
                'title' => 'Melukis Tembok Deskap',
                'description' => 'Qui itaque dolorum saepe recusandae eius. Nam enim cum dolor modi consequatur. In nisi eligendi autem.',
                'location' => 'Yogyakarta',
                'date' => '2025-06-13',
                'activities' => ['labore', 'facere', 'molestias'],
                'status' => 'Segera Dimulai',
                'image_path' => 'programs/default_2.jpg',
            ],
            [
                'title' => 'Melukis Tembok Sepakat 2',
                'description' => 'Odit consectetur modi delectus. Quas exercitationem in quos.',
                'location' => 'Balikpapan',
                'date' => '2025-01-14',
                'activities' => ['praesentium', 'aspernatur', 'iste'],
                'status' => 'Selesai',
                'image_path' => 'programs/default_3.jpg',
            ],
            [
                'title' => 'Melukis Tembok Kuale',
                'description' => 'Maxime soluta asperiores expedita. Distinctio sint a.',
                'location' => 'Bukittinggi',
                'date' => '2025-01-23',
                'activities' => ['commodi', 'quia', 'fuga'],
                'status' => 'Selesai',
                'image_path' => 'programs/default_4.jpg',
            ],
            [
                'title' => 'Melukis Tembok Wonodadi',
                'description' => 'Illum voluptatibus tenetur similique accusantium officiis doloribus. Placeat deserunt quisquam eveniet.',
                'location' => 'Palu',
                'date' => '2025-05-12',
                'activities' => ['quia', 'molestias', 'qui'],
                'status' => 'Selesai',
                'image_path' => 'programs/default_5.jpg',
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
