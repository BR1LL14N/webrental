<?php

namespace Database\Factories;

use App\Models\carFacilities;
use App\Models\alatRental;
use App\Models\facilities;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFacilities>
 */
class CarFacilitiesFactory extends Factory
{
    protected $model = carFacilities::class;

    public function definition(): array
    {
        return [
            'alat_id' => AlatRental::pluck('alat_id')->random(),
            'facilities_id' => Facilities::pluck('facilities_id')->random(),
        ];
    }
}