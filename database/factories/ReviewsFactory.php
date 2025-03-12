<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\userModel;
use App\Models\costumeModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => userModel::inRandomOrder()->first()->user_id ?? null, // Ambil user_id secara acak
            'kostum_id' => costumeModel::inRandomOrder()->first()->kostum_id ?? null, // Ambil kostum_id secara acak
            'review' => $this->faker->paragraph(), // Review teks (paragraf)
            'rating' => $this->faker->numberBetween(1, 5), // Rating antara 1 hingga 5
        ];
    }
}
