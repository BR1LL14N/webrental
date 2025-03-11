<?php

namespace Database\Seeders;


use App\Models\paymentMethod;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        paymentMethod::factory(10)->create();
        
    }
}
