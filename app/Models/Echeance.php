<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echeance extends Model
{
    use HasFactory;

    protected $table = 'echeances';

    protected $fillable = [
        'echeancier_id',
        'montant_attendu',
        'date_echeance',
        'statut',
    ];

    /**
     * Relation : une échéance appartient à un échéancier
     */
    public function echeancier()
    {
        return $this->belongsTo(Echeancier::class, 'echeancier_id');
    }

    /**
     * Relation : une échéance peut avoir plusieurs paiements
     */
    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'echeance_id');
    }
}
