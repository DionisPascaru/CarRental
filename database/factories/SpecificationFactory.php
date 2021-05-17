<?php

namespace Database\Factories;

use App\Models\Specification;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Specification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color' => $this->faker->title(),
            'fuel' => $this->faker->name,
            'transmission' => $this->faker->dateTimeThisMonth(),
            'year' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
