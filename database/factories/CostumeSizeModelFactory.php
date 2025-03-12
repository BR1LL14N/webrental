<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\costumeSizeModel;
use App\Models\costumeModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CostumeSizeModelFactory extends Factory
{
    protected $model = costumeSizeModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'size_name' => 'L',
            'stock' => $this->faker->randomNumber(2),
            'is_available' => $this->faker->randomElement([true, false]),
            'kostum_id' => costumeModel::inRandomOrder()->value('kostum_id') ?? costumeModel::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
