<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
    protected $primaryKey = 'numero_intervenant'; 
    use HasFactory;

    protected $fillable = [
        'numero_intervenant',
        'nom',
        'prenom',
        'telephone',
        'societe_siret',
    ];

    //Définie la relation avec le modèle Intervention
    //Un intervenant peut avoir plusieurs interventions
    public function interventions()
    {
        return $this->hasMany(Intervention::class, 'numIntervenant', 'numero_intervenant');
    }
}
