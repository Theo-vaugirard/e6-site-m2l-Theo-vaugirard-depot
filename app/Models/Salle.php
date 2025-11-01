<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $primaryKey  = 'numero_salle';

    protected $fillable = [
        'numero_salle',
        'nom',
        'capacite',
        'equipements',
        'services',
        'batiment'        
    ];

    //Définie la relation avec le modèle Intervention
    //Une salle peut avoir plusieurs interventions
    public function interventions()
    {
        return $this->hasMany(Intervention::class, 'numSalle', 'numero_salle');
    }

    //Définie la relation avec le modèle Climatiseur
    //Une salle peut avoir plusieurs climatiseurs
    public function climatiseurs()
    {
        return $this->hasMany(Climatiseur::class, 'num_salle', 'numero_salle');
    }

}
