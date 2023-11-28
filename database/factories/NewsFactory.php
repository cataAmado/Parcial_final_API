<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class NewsFactory extends Factory
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
            'body' => $this->faker->paragraph,
            'published_at' => $this->faker->dateTime,
            'category' => $this->faker->word,
            'source' => $this->faker->word,
            'author' => $this->faker->name,
            'url' => $this->faker->url,
            'image_url' => $this->faker->imageUrl,
            'summary' => $this->faker->paragraph,
            'featured' => $this->faker->boolean,
            'views' => $this->faker->numberBetween(0, 1000),
            'likes' => $this->faker->numberBetween(0, 1000),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
