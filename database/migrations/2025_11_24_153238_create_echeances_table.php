<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('echeances', function (Blueprint $table) {
            $table->id();

            // Clé étrangère vers la table déjà existante "echeanciers"
            $table->unsignedBigInteger('echeancier_id');

            $table->decimal('montant_attendu', 10, 2);
            $table->date('date_echeance');

            $table->unsignedTinyInteger('statut')->default(1);
            // 1 = en attente
            // 2 = payée
            // 3 = en retard
            // 4 = partiel

            $table->timestamps();

            // Définition explicite de la clé étrangère
            $table->foreign('echeancier_id')
                  ->references('id')
                  ->on('echeanciers')  // Table déjà existante
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('echeances');
    }
};
