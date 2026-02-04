<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('auditeur_classe', function (Blueprint $table) {
            $table->id();

            // Correspond à auditeurs.id_auditeur
            $table->unsignedBigInteger('auditeur_id');

            // Correspond à classes.id
            $table->unsignedBigInteger('classe_id');

            $table->timestamps();

            // Clés étrangères
            $table->foreign('auditeur_id')
                  ->references('id_auditeur')
                  ->on('auditeurs')
                  ->onDelete('cascade');

            $table->foreign('classe_id')
                  ->references('id')
                  ->on('classes')
                  ->onDelete('cascade');

            // Optionnel : empêche les doublons auditeur-classe
            $table->unique(['auditeur_id', 'classe_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('auditeur_classe');
    }
};
