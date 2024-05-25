<?php

namespace Database\Seeders;

use App\Models\GraphicDesigns;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrafisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GraphicDesigns::factory()->count(5)->create();
    }
}
