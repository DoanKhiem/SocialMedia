<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'photo' => $this->faker->imageUrl('100', '100'),
            'is_parent' => $this->faker->boolean,
            'summary' => $this->faker->sentences(3, true),
            'parent_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
