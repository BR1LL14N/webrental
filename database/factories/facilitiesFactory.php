<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\facilities;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\facilities>
 */
class facilitiesFactory extends Factory
{
    protected $model = facilities::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'icon' => $this->faker->imageUrl(640, 480),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
