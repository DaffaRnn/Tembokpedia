<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['Sedang Berlangsung', 'Segera Dimulai', 'Selesai'];

        return [
            'title' => 'Melukis di ' . $this->faker->company,
            'description' => $this->faker->sentence(15),
            'date' => $this->faker->date(),
            'location' => 'SDN ' . $this->faker->randomDigit() . ' ' . $this->faker->city,
            'status' => $this->faker->randomElement($statuses),
            'image_path' => 'img/img1.jpg',
            'activities' => [
                'Melukis mural tematik',
                'Edukasi cerita bergambar',
                'Kolaborasi dengan siswa'
            ],
        ];
    }
}
