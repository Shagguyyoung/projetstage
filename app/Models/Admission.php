<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admission extends Model
{
    use HasFactory;

    // Nom de la table si différent du pluriel par défaut
    protected $table = 'admissions';

    // Colonnes autorisées pour l'assignation en masse
    protected $fillable = [
        'auditeur_id',
        'decision',
        'centre',
    ];

    /**
     * Relation avec l'auditeur
     */
    public function auditeur()
    {
        return $this->belongsTo(Auditeur::class, 'auditeur_id', 'id_auditeur');
    }
}
