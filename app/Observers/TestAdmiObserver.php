<?php

namespace App\Observers;

use App\Models\TestAdmi;
use App\Models\Admission;

class TestAdmiObserver
{
    /**
     * Handle the TestAdmi "created" or "updated" event.
     */
    public function saved(TestAdmi $testAdmi)
    {
        // Vérifie si etat_test est 1
        if ($testAdmi->etat_test == 1) {

            // Vérifie si une admission existe déjà pour cet auditeur
            $exists = Admission::where('auditeur_id', $testAdmi->auditeur_id)->exists();

            if (!$exists) {
                // Crée l'admission
                Admission::create([
                    'auditeur_id' => $testAdmi->auditeur_id,
                    'decision' => 'En attente', // tu peux changer
                    'centre' => 'Non défini',   // tu peux changer
                ]);
            }
        }
    }
}
