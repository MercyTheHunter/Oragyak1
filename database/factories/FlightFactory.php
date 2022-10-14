<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "number" => strval($this->faker->numberBetween($min = 100, $max=999))."-".$this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter(),
            "name" => $this->faker->stateAbbr().$this->faker->postcode(),
            "destination" => $this->faker->state(),
            "price" => $this->faker->numberBetween($min = 10000, $max=50000),
            "active" => $this->faker->numberBetween($min = 0, $max = 1),
            "delayed" => $this->faker->numberBetween($min = 0, $max = 1),
            "departed" => $this->faker->numberBetween($min = 0, $max = 1),
            "arrived_at" => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        ];
    }
}
