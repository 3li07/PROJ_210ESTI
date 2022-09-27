<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PreparatoireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname(),
            'prenom' => $this->faker->firstname(),
            'contact' => $this->faker->e164PhoneNumber(),
        ];
    }
}
