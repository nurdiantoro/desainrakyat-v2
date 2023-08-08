<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Webs>
 */
class WebsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            // Bikin data palsu
            // https://fakerphp.github.io/
            'judul' => fake()->word(rand(2, 5)),
            'deskripsi' => fake()->paragraph(),
            'link' => fake()->word(),
            'image' => fake()->word() . '.png',
        ];
    }
}
