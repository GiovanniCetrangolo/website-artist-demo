<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RichiestaPrenotazione;

class RichiestaPrenotazioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RichiestaPrenotazione::factory()->count(10)->create();
    }
}
