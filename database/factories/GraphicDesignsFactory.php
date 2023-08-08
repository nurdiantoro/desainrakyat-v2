<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GraphicDesigns>
 */
class GraphicDesignsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kategori = array('Logo', 'Poster', 'Banner', 'Vector Art');
        return [
            // Bikin data palsu
            // https://fakerphp.github.io/

            'judul' => fake()->name(),
            'file' => fake()->word() . '.png',
            'kategori' => $kategori[array_rand($kategori)],
        ];
    }
}
