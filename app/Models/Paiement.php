<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiements';

    protected $fillable = [
        'auditeur_id',
        'echeance_id',
        'montant',
        'date_paiement',
        'mode_paiement',
        'reference',
        'img',
        'type_versement',
        'agence',
        'statut',
    ];

    // Relation avec l'auditeur
    public function auditeur()
    {
        return $this->belongsTo(Auditeur::class, 'auditeur_id', 'id_auditeur');
    }

    // Relation avec l'échéance
    public function echeance()
    {
        return $this->belongsTo(Echeance::class, 'echeance_id', 'id');
    }
}
