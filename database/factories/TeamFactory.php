<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\League;
class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'city' => $this->faker->city,
            'foundation_year' => $this->faker->numberBetween(1800, 2022),
            'description' => $this->faker->sentence,
        ];
    }
}