<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RichiestaPrenotazione extends Model
{
    use HasFactory;

    protected $table = 'richiesta_prenotazioni';

    protected $fillable = [
        'nome',
        'email',
        'data_evento',
        'messaggio',
        'stato',
    ];
}
