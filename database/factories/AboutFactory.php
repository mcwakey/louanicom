<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => 'About Me',
            'description' => 'I am a developer with many years of experience.',
            'image_path' => null,
            'action_text' => 'Download CV',
            'action_link' => '/docs/resume.pdf',
        ];
    }
}
