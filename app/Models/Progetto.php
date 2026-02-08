<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progetto extends Model
{
   protected $table = 'progetti';
 
   protected $fillable = [
        'titolo',
        'descrizione',
        'immagine',
    ];

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}