<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    // Champs pouvant être remplis en masse
    protected $fillable = [
        'ecole_id',
        'nom',
        'abreviation',
        'description',
    ];

    /**
     * Une filière appartient à une école
     */
    public function ecole()
    {
        return $this->belongsTo(Ecole::class, 'ecole_id');
    }

    /**
     * Une filière peut avoir plusieurs classes
     */
    public function classes()
    {
        return $this->hasMany(Classe::class, 'filiere_id');
    }
}
