<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progetto extends Model
{
    use HasFactory;

    protected $table = 'progetti';

    protected $fillable = [
        'titolo',
        'descrizione',
        'immagine',
    ];
}
