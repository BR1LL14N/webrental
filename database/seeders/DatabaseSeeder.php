<?php

namespace Database\Seeders;

use App\Models\costumeModel;
use App\Models\costumeSizeModel;
use App\Models\envoiceModel;
use App\Models\paymentMethod;
use App\Models\rentalsModel;
use App\Models\reviewsModel;
use App\Models\typeCostumeModel;
use App\Models\UserModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        paymentMethod::factory(10)->create();
        UserModel::factory(10)->create();
        typeCostumeModel::factory()->state(['jenis_kostum_name' => 'adat'])->create();
        typeCostumeModel::factory()->state(['jenis_kostum_name' => 'fantasy'])->create();
        typeCostumeModel::factory()->state(['jenis_kostum_name' => 'film'])->create();
        costumeSizeModel::factory()->state(['size_name' => 'S'])->create();
        costumeSizeModel::factory()->state(['size_name' => 'M'])->create();
        costumeSizeModel::factory()->state(['size_name' => 'L'])->create();
        costumeSizeModel::factory()->state(['size_name' => 'XL'])->create();
        costumeModel::factory(10)->create();
        rentalsModel::factory(10)->create();
        envoiceModel::factory(10)->create();
        reviewsModel::factory(10)->create();
    }
}
