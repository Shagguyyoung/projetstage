<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echeancier extends Model
{
    use HasFactory;

    protected $table = 'echeanciers';

    protected $fillable = [
        'auditeur_id',
        'montant_total',
        'date_debut',
        'date_fin',
        'Engagement',
        'statut',
        'Etat',
    ];

    // Relation avec l'auditeur
    public function auditeur()
    {
        return $this->belongsTo(Auditeur::class, 'auditeur_id', 'id_auditeur');
    }

    // Relation avec les échéances
    public function echeances()
    {
        return $this->hasMany(Echeance::class, 'echeancier_id', 'id');
    }

    public function Echeance()
{
    return $this->hasMany(Echeance::class);
}
}
