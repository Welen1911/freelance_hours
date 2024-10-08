<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_by' => User::factory(),
            'title' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['Vue', 'Laravel', 'Tailwind', 'Node', 'Spring', 'Angular', 'Livewire']),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
        ];
    }
}
