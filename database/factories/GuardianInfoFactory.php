<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GuardianInfo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GuardianInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'mothers_name' => $this->faker->name,
            'fathers_name' => $this->faker->name,
            'legal_guardians_name' => $this->faker->name,
        ];
    }
}
