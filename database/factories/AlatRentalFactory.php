<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AlatRental;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlatRental>
 */
class AlatRentalFactory extends Factory
{
    protected $model = AlatRental::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word(),
            'jenis' => $this->faker->randomElement(['Elektronik', 'Outdoor', 'Olahraga']),
            'icon' => $this->faker->imageUrl(100, 100),
            'deskripsi' => $this->faker->sentence(),
            'jumlah_unit' => $this->faker->numberBetween(1, 50),
            'harga_sewa' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['tersedia', 'sedang disewa', 'reparasi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
