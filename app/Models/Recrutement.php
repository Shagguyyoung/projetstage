<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    protected $table = 'recrutements';

    protected $primaryKey = 'id_recrutement'; // clé primaire correcte
    public $incrementing = true;              // auto-incrémentée
    protected $keyType = 'int';               // entier

    protected $fillable = [
        'auditeur_id',
        'recu',
        'dossier',
        'refus','prospere',
    ];

    public function auditeur()
    {
        return $this->belongsTo(Auditeur::class, 'auditeur_id', 'id_auditeur');
    }
}
