<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\envoiceModel;
use App\Models\paymentMethod;
use App\Models\rentalsModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EnvoiceModelFactory extends Factory
{
    protected $model = envoiceModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rental_id' => rentalsModel::inRandomOrder()->value('rental_id') ?? rentalsModel::factory(),
            'payment_method_id' => paymentMethod::inRandomOrder()->value('payment_method_id') ?? paymentMethod::factory(),
            'envoice_number' => $this->faker->unique()->randomNumber(5),
            'total_price' => rentalsModel::inRandomOrder()->value('total_price') ?? $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
