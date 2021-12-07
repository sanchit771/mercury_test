<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_name' => $this->faker->company().' Hotel',
            'hotel_rating' => rand(1,5),
            'hotel_address' => $this->faker->address(),    
            'hotel_supplier' => $this->faker->randomElement(['own' ,'hotelbeds', 'sunhotels']),
            'hotel_status' => $this->faker->randomElement(['active' ,'inactive']),
            'created_at' => Carbon::now(),
        ];
    }
}
