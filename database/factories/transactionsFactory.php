<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\User;
use App\Models\alatRental;
use App\Models\paymentMethod;
use App\Models\User;
use App\Models\transactions;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transactions>
 */
class transactionsFactory extends Factory
{
    protected $model = transactions::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', 'now');
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 week');

        return [
            'user_id' => User::exists() ? User::inRandomOrder()->first()->user_id : User::factory(),
            'alat_id' => alatRental::exists() ? alatRental::inRandomOrder()->first()->alat_id : alatRental::factory(),
            'payment_method_id' => PaymentMethod::exists() ? PaymentMethod::inRandomOrder()->first()->payment_method_id : paymentMethod::factory(),
            'tanggal_mulai' => $startDate,
            'tanggal_selesai' => $endDate,
            'status' => $this->faker->randomElement(['pending', 'diproses', 'disetujui']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
