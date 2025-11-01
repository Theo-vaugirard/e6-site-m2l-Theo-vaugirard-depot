<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $primaryKey = 'id_intervention'; 
    use HasFactory;

    protected $fillable = [
        'id_intervention',
        'num_salle',
        'num_intervenant',
        'date',
        'heure',
        'motif',
    ];

    //Définition des relations avec les autres modèles

    //Une intervention concerne une salle
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'num_salle', 'numero_salle');
    }

    //Une intervention concerne un intervenant
    public function intervenant()
    {
        return $this->belongsTo(Intervenant::class, 'num_intervenant', 'numero_intervenant');
    }
       
}
