<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    // Champs pouvant être remplis en masse
    protected $fillable = [
        'nom',
        'abreviation',
        'telephone',
        'adresse',
        'lien_site',
    ];

    /**
     * Une école peut avoir plusieurs filières
     */
    public function filieres()
    {
        return $this->hasMany(Filiere::class, 'ecole_id');
    }
}
