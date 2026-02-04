<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();

            // Relation avec l'auditeur
            $table->unsignedBigInteger('auditeur_id')->unique();

            // Champs spécifiques à l'admission
            $table->string('decision')->nullable(); // Par exemple: 'Accepté', 'Refusé', 'En attente'
            $table->string('centre')->nullable();   // Centre de passage de l'auditeur

            $table->timestamps();

            // Clé étrangère vers la table auditeurs
            $table->foreign('auditeur_id')
                  ->references('id_auditeur')
                  ->on('auditeurs')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
