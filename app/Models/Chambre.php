<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_nom', 'hotel_description',
        'chambre_nom', 'prix', 'nombre_lits',
        'max_adultes', 'enfants_max', 'attributs', 'statut'
    ];
}
