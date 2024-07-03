<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bachelier extends Model
{
    protected $fillable = [
        'numero_table','nom', 'prenom', 'etablissement', 'mention'
    ];

    // ...
}

