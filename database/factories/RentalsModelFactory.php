<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\rentalsModel;
use App\Models\costumeModel;
use App\Models\userModel;
use App\Models\costumeSizeModel;
use App\Models\paymentMethod;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RentalsModelFactory extends Factory
{
    protected $model = rentalsModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UserModel::inRandomOrder()->value('user_id') ?? UserModel::factory(),
            'kostum_id' => CostumeModel::inRandomOrder()->value('kostum_id') ?? CostumeModel::factory(),
            'kostum_size_id' => CostumeSizeModel::inRandomOrder()->value('kostum_size_id') ?? CostumeSizeModel::factory(),
            'rental_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'return_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'total_price' => $this->faker->randomFloat(2, 50, 500),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected', 'returned']),
            'penalty' => $this->faker->randomFloat(2, 0, 100),
            'payment_method_id' => PaymentMethod::inRandomOrder()->value('payment_method_id') ?? PaymentMethod::factory(),
        ];
    }
}
