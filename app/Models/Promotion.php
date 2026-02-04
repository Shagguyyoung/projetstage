<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ecole_id',
        'nom',
        'annee_debut',
        'annee_fin',
        'type_rentree',
        'num_promo',
    ];

    public function ecole()
    {
        return $this->belongsTo(Ecole::class);
    }

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    // Création automatique de num_promo et des classes
    protected static function booted()
    {
        static::creating(function ($promotion) {
            // Définir num_promo automatiquement
            $lastPromo = Promotion::where('ecole_id', $promotion->ecole_id)
                            ->orderBy('num_promo', 'desc')
                            ->first();

            $promotion->num_promo = $lastPromo ? $lastPromo->num_promo + 1 : 1;
        });

        static::created(function ($promotion) {
            // Créer les classes pour toutes les filières
            $ecole = $promotion->ecole;
            foreach ($ecole->filieres as $filiere) {
                for ($i = 1; $i <= 2; $i++) { // Master 1 et Master 2
                    Classe::create([
                        'promotion_id' => $promotion->id,
                        'filiere_id' => $filiere->id,
                        'niveau' => "Master $i",
                        'numero_classe' => $i,
                        'nom' => $filiere->abreviation . $i . $promotion->num_promo,
                    ]);
                }
            }
        });
    }
}
