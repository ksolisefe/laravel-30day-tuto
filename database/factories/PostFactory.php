<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
use App\Models\Tag;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6, true),
            'subtitle' => fake()->realText(30),
            'content' => fake()->realText(200),
            'user_id' => User::factory(),
        ];
    }

    /**
     * Configure the factory.
     *
     * This allows us to automatically attach tags to the post after creation,
     * thus seeding the post_tag pivot table.
     */
    public function configure()
    {
        return $this->afterCreating(function ($post) {
            // Attach between 1 and 3 random tags to the post
            $tags = Tag::inRandomOrder()->take(rand(1, 3))->pluck('id');
            if ($tags->isEmpty()) {
                // If no tags exist, create some and attach
                $tags = Tag::factory()->count(3)->create()->pluck('id');
            }
            $post->tags()->attach($tags);
        });
    }
}
