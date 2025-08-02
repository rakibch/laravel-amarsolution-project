<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(200, 200, 'people'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'dob' => $this->faker->date('Y-m-d', '2010-01-01'),
            'password' => Hash::make('password'),
            'class' => $this->faker->randomElement(['One', 'Two', 'Three', 'Four', 'Five']),
            'section' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
