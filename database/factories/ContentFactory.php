<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['page', 'post']),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'user_id' => 1,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
