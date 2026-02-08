<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('richiesta_prenotazioni', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('email');
    $table->date('data_evento');
    $table->text('messaggio')->nullable();
    $table->enum('stato', ['nuovo', 'letto', 'archiviato'])->default('nuovo');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('richiesta_prenotazioni');
    }
};
