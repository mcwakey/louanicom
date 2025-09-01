<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => 'Project '. $this->faker->word(),
            'type' => 'Design',
            'image_path' => null,
            'link' => null,
        ];
    }
}
