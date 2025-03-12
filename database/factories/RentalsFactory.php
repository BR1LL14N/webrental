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
class RentalsFactory extends Factory
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
            'user_id' => UserModel::inRandomOrder()->first()->user_id ?? null, // Ambil user_id secara acak
            'kostum_id' => CostumeModel::inRandomOrder()->first()->kostum_id ?? null, // Ambil kostum_id secara acak
            'kostum_size_id' => CostumeSizeModel::inRandomOrder()->first()->kostum_size_id ?? null, // Ambil kostum_size_id secara acak
            'rental_date' => $this->faker->dateTimeBetween('-1 month', 'now'), // Tanggal rental (antara 1 bulan lalu hingga sekarang)
            'return_date' => $this->faker->dateTimeBetween('now', '+1 month'), // Tanggal pengembalian (antara sekarang hingga 1 bulan ke depan)
            'total_price' => $this->faker->randomFloat(2, 50, 500), // Harga total (misalnya antara 50 hingga 500)
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected', 'returned']), // Status sewa
            'penalty' => $this->faker->randomFloat(2, 0, 100), // Denda (misalnya antara 0 hingga 100)
            'payment_method_id' => paymentMethod::inRandomOrder()->first()->payment_method_id ?? null, // ID metode pembayaran (misalnya antara 1 hingga 5)
        ];
    }
}
