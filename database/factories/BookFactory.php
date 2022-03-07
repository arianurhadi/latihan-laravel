<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'slug' => $this->faker->slug,
            'name' => $this->faker->words($nb = 1, $asText = true) ,
            'qty' => $this->faker->randomDigit,
            'image' => $this->faker->imageUrl(800, 600, 'books'),
            'category_id' => Category::all()->random()->id
        ];
    }
}
