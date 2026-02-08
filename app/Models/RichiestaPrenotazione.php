<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RichiestaPrenotazione extends Model
{
     protected $table = 'richiesta_prenotazioni';
     
protected $fillable = [
        'nome',
        'email',
        'data_evento',
        'messaggio',
        'stato',
    ];
}
