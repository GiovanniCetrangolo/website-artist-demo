<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Repertorio;

class RepertorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Repertorio::factory()->count(10)->create();
    }
}
