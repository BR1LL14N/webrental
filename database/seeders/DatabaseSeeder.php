<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\alatRental;
use App\Models\transactions;
use App\Models\reviews;
use App\Models\paymentMethod;
// use App\Models\User;
// use Database\Factories\UserFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        alatRental::factory(10)->create();
        paymentMethod::factory(10)->create();
        transactions::factory(10)->create();
        reviews::factory(10)->create();

    }
}
