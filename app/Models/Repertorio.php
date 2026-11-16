<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Repertorio extends Model
{
    use HasFactory;

    protected $table = 'repertori';

    protected $fillable = [
        'titolo',
        'genere',
        'note',
        'ordine_index',
    ];
}
