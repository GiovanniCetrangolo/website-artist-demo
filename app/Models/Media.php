<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    
protected $fillable = [
    'tipo',
    'percorso_foto',
    'youtube_id',
    'ordine',
];


    public function progetto()
    {
        return $this->belongsTo(Progetto::class);
    }
}
