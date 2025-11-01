<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $primaryKey = 'id_evenement'; 
    use HasFactory;

    protected $fillable = [
        'id',
        'intitule',
        'date_deb',
        'date_fin',
        'details',
        'lieu'
    ];
}
