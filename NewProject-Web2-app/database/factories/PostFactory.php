<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'descerption' => $this->faker->text(),
            'image' => 'posts/feature_image/img.jpg',
            'author' => $this->faker->name(),
            'category_id' => Category::all()->random(),
        ];
    }
}
