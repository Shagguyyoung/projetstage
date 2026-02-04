<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestAdmi extends Model
{
    protected $table = 'test_admi';

    protected $fillable = [
        'auditeur_id',
        'nb_mess',
        'etat_test',
    ];

    public function auditeur()
    {
        return $this->belongsTo(Auditeur::class, 'auditeur_id', 'id_auditeur');
    }
}
