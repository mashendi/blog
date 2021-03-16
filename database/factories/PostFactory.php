<?php

namespace Database\Factories;

use App\Models\Post;
use \App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->faker->text,
            'user_id' => User::all()->random()->id
        ];
    }
}
