<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repertorio extends Model
{
    protected $table = 'repertori';
    
 protected $fillable = [
        'titolo',
        'genere',
        'note',
        'ordine_index',
    ];
}
