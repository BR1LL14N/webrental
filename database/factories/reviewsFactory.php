<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\users;
use App\Models\alatRental;
use App\Models\User;
use App\Models\reviews;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reviews>
 */
class reviewsFactory extends Factory
{
    protected $model = reviews::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::exists() ? User::inRandomOrder()->first()->user_id : User::factory(),
            'alat_id' => alatRental::exists() ? AlatRental::inRandomOrder()->first()->alat_id : alatRental::factory(),
            'review' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
