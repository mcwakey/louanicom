<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'image_path' => null,
        ];
    }
}
