<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\userModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    protected $model = userModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => $this->faker->name(),
            'user_email' => $this->faker->unique()->safeEmail(),
            'user_password' => $this->faker->password(),
            'user_phone' => $this->faker->phoneNumber(),
            'user_address' => $this->faker->address(),
            'user_role' => $this->faker->randomElement(['admin', 'user']),
            'icon' => $this->faker->imageUrl(50, 50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
