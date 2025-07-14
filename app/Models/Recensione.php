<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recensione extends Model
{
    protected $table = 'recensioni';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'qualita',
        'spedizione',
        'assistenza',
        'commento'
    ];
    
    protected $casts = [
        'data' => 'datetime',
    ];
}
