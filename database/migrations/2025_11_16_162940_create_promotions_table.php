<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ecole_id')->constrained('ecoles')->onDelete('cascade');
            $table->string('nom');
            $table->year('annee_debut');
            $table->year('annee_fin');
            $table->enum('type_rentree', ['normale', 'decalee'])->default('normale');
            $table->integer('num_promo'); // numéro auto-incrémenté par école
            $table->timestamps();
        });

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promotion_id')->constrained('promotions')->onDelete('cascade');
            $table->foreignId('filiere_id')->constrained('filieres')->onDelete('cascade');
            $table->string('niveau'); // Master 1, Master 2
            $table->integer('numero_classe'); // 1 ou 2
            $table->string('nom'); // Exemple : IDA11
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
        Schema::dropIfExists('promotions');
    }
};
