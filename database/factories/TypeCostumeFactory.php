<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\typeCostumeModel;
use PhpParser\Node\Stmt\Foreach_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TypeCostumeFactory extends Factory
{
    protected $model = typeCostumeModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_kostum_name' => 'Baju Adat',
            'created_at' => now(),  
            'updated_at' => now(),
        ];
    }
}
