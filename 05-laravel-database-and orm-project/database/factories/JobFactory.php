<?php
// filepath: c:\Users\Umaya\Music\laravel-excercise-database\database\factories\JobFactory.php


namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(), // Ensure Employer is imported
            'company' => fake()->company(),
        ];
    }
}