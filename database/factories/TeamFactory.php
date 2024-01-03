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
        $cities = ['London', 'Madrid', 'Manchester', 'Barcelona', 'Berlin', 'Paris', 'Milan'];
        $foundations = [1892, 1902, 1878, 1899, 1892, 1970, 1908];
        $prefixes = ['FC', 'United', 'Athletic', 'Real', 'AC', 'Olympic', 'City'];
        $suffixes = ['United', 'City', 'FC', 'Stars', 'Athletic', 'Rovers', 'Spartans'];

        return [
            'name' => ucwords($this->faker->randomElement($prefixes) . ' ' . $this->faker->word . ' ' . $this->faker->randomElement($suffixes)),
            'city' => $this->faker->randomElement($cities),
            'foundation_year' => $this->faker->randomElement($foundations),
            'description' => $this->faker->sentence,
            'league_id' => League::factory(),
        ];
    }
}