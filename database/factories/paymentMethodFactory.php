<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\paymentMethod;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\paymentMethod>
 */
class paymentMethodFactory extends Factory
{
    protected $model = paymentMethod::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_method_name' => $this->faker->randomElement(['Bank Transfer', 'E-Wallet', 'Kartu Kredit']),
            'payment_method_icon' => $this->faker->imageUrl(50, 50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
