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
        $teamData = [
            'Fenerbahce' => ['Istanbul', 1907],
            'Galatasaray' => ['Istanbul', 1905],
            'Trabzonspor' => ['Trabzon', 1967],
            'Kayserispor' => ['Kayseri', 1966],
            'Besiktas' => ['Istanbul', 1903],
            'Adana Demirspor' => ['Adana', 1940],
            'Rizespor' => ['Rize', 1953],
            'Antalyaspor' => ['Antalya', 1966],
            'Kasimpasa' => ['Istanbul', 1921],
            'Sivasspor' => ['Sivas', 1967],
            'Ankaragucu' => ['Ankara', 1911],
            'Alanyaspor' => ['Alanya', 1948],
            'Hatayspor' => ['Hatay', 1967],
            'Basaksehir' => ['Istanbul', 1990],
            'Gaziantep' => ['Gaziantep', 1988],
            'Konyaspor' => ['Konya', 1922],
            'F. Karagumruk' => ['Istanbul', 1926],
            'Samsunspor' => ['Samsun', 1965],
            'Pendikspor' => ['Istanbul', 1969],
            'Istanbulspor' => ['Istanbul', 1926],
        ];

        $teamName = $this->faker->unique()->randomElement(array_keys($teamData));

        return [
            'name' => $teamName,
            'city' => $teamData[$teamName][0],
            'foundation_year' => $teamData[$teamName][1],
            'league_id' => League::factory(),
        ];
    }
}