<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    // Champs pouvant être remplis en masse
    protected $fillable = [
        'promotion_id',
        'filiere_id',
        'niveau',
        'numero_classe',
        'nom',
    ];

    /**
     * Une classe appartient à une promotion
     */
    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    /**
     * Une classe appartient à une filière
     */
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    /**
     * Une classe peut avoir plusieurs auditeurs via la table pivot auditeur_classe
     */
    public function auditeurs()
    {
        return $this->belongsToMany(
            Auditeur::class,
            'auditeur_classe',   // table pivot
            'classe_id',         // clé de ce modèle dans la table pivot
            'auditeur_id'        // clé du modèle lié dans la table pivot
        );
    }
}
