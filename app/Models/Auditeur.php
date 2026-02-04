<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Auditeur extends Model
{
    use HasFactory;

    protected $table = 'auditeurs';
    protected $primaryKey = 'id_auditeur';
    public $incrementing = true;

    // 🔥 Propriété pour désactiver les hooks
    public static $ignoreHooks = false;

    protected $fillable = [
        'nom',
        'prenoms',
        'pays_residence',
        'indicatif_pays',
        'mail',
        'contact_tel',
        'numero_whatsapp',
        'mot_de_passe',
        'genre_dossier',
        'centre',
        'genre',
        'ville_naissance',
        'pays_naissance',
        'ville_residence',
        'extrait',
        'carte_nationalite',
        'photo',
        'uuid',
        'matricule'
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function recrutement()
    {
        return $this->hasOne(Recrutement::class, 'auditeur_id', 'id_auditeur');
    }

    public function echeanciers()
    {
        return $this->hasMany(Echeancier::class, 'auditeur_id');
    }

    public function classes()
    {
        return $this->belongsToMany(
            Classe::class,
            'auditeur_classe',
            'auditeur_id',
            'classe_id'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | BOOT MODEL
    |--------------------------------------------------------------------------
    */

    protected static function booted()
    {
        parent::booted();

        // 🚫 Hook CREATED
        static::created(function ($auditeur) {
            if (self::$ignoreHooks) return;

            if (!$auditeur->recrutement) {
                $auditeur->recrutement()->create([
                    'recu' => null,
                    'dossier' => 0,
                    'refus' => 0,
                    'prospere' => 0
                ]);
            }
        });

        // 🚫 Hook DELETING
        static::deleting(function ($auditeur) {
            if (self::$ignoreHooks) return;

            $files = ['extrait', 'carte_nationalite', 'photo'];

            foreach ($files as $file) {
                if (!empty($auditeur->$file) && File::exists(public_path($auditeur->$file))) {
                    File::delete(public_path($auditeur->$file));
                }
            }

            if ($auditeur->recrutement) {
                $auditeur->recrutement->delete();
            }
        });

        // 🔥 Création automatique des recrutements manquants (audit DB)
        self::createMissingRecrutements();
    }

    /*
    |--------------------------------------------------------------------------
    | REPAIR: Recrutements manquants
    |--------------------------------------------------------------------------
    */

    protected static function createMissingRecrutements()
    {
        static $executed = false;
        if ($executed) return;
        $executed = true;

        $auditeursSans = self::doesntHave('recrutement')->get();

        foreach ($auditeursSans as $auditeur) {
            $auditeur->recrutement()->create([
                'recu' => null,
                'dossier' => 0,
                'refus' => 0,
                'prospere' => 0,
            ]);
        }
    }
}
