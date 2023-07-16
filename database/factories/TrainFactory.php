<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> company(),
            'start_station' => fake() -> city(),
            'end_station' => fake() -> city(),
            'start_time' => fake() -> dateTimeBetween('-2 day', '-1 day'),
            'end_time' => fake() -> dateTimeBetween('-1 day', '-0 day'),
            'train_code' => fake()-> unique() -> numerify('########'),
            'coach_number' => fake() -> numberBetween(1, 20),
            'in_time' => fake() -> boolean(),
            'deleted' => fake() -> boolean()
        ];
    }
}
