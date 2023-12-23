<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listings>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Arr::random(["Software Engineer",
            "Web Developer",
            "Mobile App Developer",
            "Full Stack Developer",
            "Frontend Developer",
            "Backend Developer",
            "DevOps Engineer",
            "Software Architect",
            "UI/UX Developer",
            "Embedded Systems Developer",
            "Quality Assurance Engineer",
            "Systems Analyst",
            "Database Developer",
            "Game Developer",
            "Cloud Solutions Architect"]),
            'tags' => Arr::random(['PHP', 'Laravel', 'Backend','Frontend', 'JavaScript', 'CSS', 'HTML', 'Design', 'UX/UI', 'Python', 'Ruby', 'Mobile']),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraphs(3, true),
        ];
    }
}
