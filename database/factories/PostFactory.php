<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' => 1,
            'category_id' => $this->faker->randomDigit(),
            'title' => $this->faker->text(50),
            'content' => $this->faker->text(),
            'cover' => $this->faker->randomDigit().'.jpg'
        ];
    }
}
