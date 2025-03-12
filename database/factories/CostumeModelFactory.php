<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\costumeModel;
use App\Models\typeCostumeModel;
// use Illuminate\Validation\Rules\Exists;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CostumeModelFactory extends Factory
{
    protected $model = costumeModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kostum_name' => $this->faker->name(),
            'kostum_description' => $this->faker->text(),
            'kostum_image' => $this->faker->imageUrl(50, 50),
            'kostum_price' => $this->faker->randomNumber(5),
            'jenis_kostum_id' => typeCostumeModel::inRandomOrder()->value('jenis_kostum_id') ?? typeCostumeModel::factory(),
        ];
    }
}
