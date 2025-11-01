<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Climatiseur extends Model
{

    protected $fillable = [
        'id',
        'num_salle',
        'marque',
        'modele',
        'surface_min',
        'surface_max',
        'puissance',        
    ];

    //Définition des relations avec les autres modèles

    //Un climatiseur est installé dans une salle
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'num_salle', 'numero_salle');
    }
}
