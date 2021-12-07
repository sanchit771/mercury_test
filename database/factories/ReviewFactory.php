<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id' => Hotel::all()->random()->id,
            'review_title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'author' => $this->faker->name(),    
            'review_description' => $this->faker->text(),
            'added_on' => now(),
        ];
    }
}
