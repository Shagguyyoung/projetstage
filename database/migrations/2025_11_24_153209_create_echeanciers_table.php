<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('echeanciers', function (Blueprint $table) {
            $table->id();

            // Clé étrangère qui pointe vers auditeurs.id_auditeur
            $table->unsignedBigInteger('auditeur_id')->nullable();

            $table->decimal('montant_total', 10, 2);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->unsignedTinyInteger('Engagement')->default(0); // 1 = actif
            $table->unsignedTinyInteger('statut')->default(1); // 1 = actif
            $table->unsignedTinyInteger('Etat')->default(0); // 1 = acti
            $table->timestamps();

            // 🔗 Clé étrangère correcte
            $table->foreign('auditeur_id')
                  ->references('id_auditeur')   // correspond à ta table auditeurs
                  ->on('auditeurs')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('echeanciers');
    }
};
