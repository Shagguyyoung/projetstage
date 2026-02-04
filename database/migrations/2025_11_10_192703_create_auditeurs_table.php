<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('auditeurs', function (Blueprint $table) {
            $table->id('id_auditeur');
            $table->string('Matricule');
            $table->string('uuid');
            $table->string('nom', 100);
            $table->string('prenoms', 150);
            $table->string('pays_residence', 50);
            $table->string('indicatif_pays', 10)->nullable();
            $table->string('mail', 100);
            $table->string('contact_tel', 20)->nullable();
            $table->string('numero_whatsapp', 20)->nullable();
            $table->string('mot_de_passe', 255);
            $table->enum('genre_dossier', ['VAP','Direct']);
            $table->string('centre', 100)->nullable();
            $table->enum('genre', ['M','F','Autre']);
            $table->string('ville_naissance', 50)->nullable();
            $table->string('pays_naissance', 50)->nullable();
            $table->string('ville_residence', 50)->nullable();
            $table->string('extrait', 255)->nullable();
            $table->string('carte_nationalite', 255)->nullable();
            $table->string('photo', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('auditeurs');
    }
};
