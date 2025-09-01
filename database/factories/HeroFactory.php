<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HeroFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => 'Alan Walker',
            'description' => 'Web & Mobile App Developer',
            'media_path' => null,
        ];
    }
}
