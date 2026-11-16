<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Progetto;

class ProgettoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Progetto::factory()->count(3)->create();
    }
}
