<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatriculeRotation extends Model
{
    use HasFactory;

    protected $table = 'matricule_rotation';

    protected $fillable = [
        'ancien_matricule',
        'nouveau_matricule',
        'description',
    ];

    // Relation vers l'auditeur
    
}
