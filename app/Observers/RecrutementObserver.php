<?php

namespace App\Observers;

use App\Models\Recrutement;
use App\Models\TestAdmi;

class RecrutementObserver
{
    /**
     * Handle the Recrutement "created" event.
     */
    public function created(Recrutement $recrutement): void
    {
        $this->syncTestAdmi($recrutement);
    }

    /**
     * Handle the Recrutement "updated" event.
     */
    public function updated(Recrutement $recrutement): void
    {
        $this->syncTestAdmi($recrutement);
    }

    /**
     * Handle the Recrutement "deleted" event.
     */
    public function deleted(Recrutement $recrutement): void
    {
        // Supprimer automatiquement dans test_admi si le recrutement est supprimé
        TestAdmi::where('auditeur_id', $recrutement->auditeur_id)->delete();
    }

    /**
     * Handle the Recrutement "restored" event.
     */
    public function restored(Recrutement $recrutement): void
    {
        $this->syncTestAdmi($recrutement);
    }

    /**
     * Handle the Recrutement "force deleted" event.
     */
    public function forceDeleted(Recrutement $recrutement): void
    {
        // Supprimer définitivement dans test_admi
        TestAdmi::where('auditeur_id', $recrutement->auditeur_id)->delete();
    }

    /**
     * Synchroniser l'auditeur dans test_admi selon les conditions
     */
    protected function syncTestAdmi(Recrutement $recrutement)
    {
        // Condition pour être dans test_admi
        $shouldExist = ($recrutement->prospere == 0 && in_array($recrutement->dossier, [3, 4]));

        if ($shouldExist) {
            // Ajouter si n'existe pas encore
            TestAdmi::firstOrCreate(
                ['auditeur_id' => $recrutement->auditeur_id],
                ['nb_mess' => 0, 'etat_test' => '0']
            );
        } else {
            // Supprimer si existe et ne respecte plus les conditions
            TestAdmi::where('auditeur_id', $recrutement->auditeur_id)->delete();
        }
    }
}
