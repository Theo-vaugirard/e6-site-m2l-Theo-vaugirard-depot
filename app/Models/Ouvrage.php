<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Ouvrage extends Model
{
    // Indique que ce modèle ne doit pas utiliser les timestamps
    public $timestamps = false;

    // Définir la clé primaire personnalisée
    protected $primaryKey = 'cote'; 

    protected $fillable = [
        'cote',
        'auteur',
        'titre',
        'anneeParution',
        'type'
    ];

    use HasApiTokens;
}
