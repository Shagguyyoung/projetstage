<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matricule_rotation', function (Blueprint $table) {
            $table->id();



            $table->string('ancien_matricule');
            $table->string('nouveau_matricule');
            $table->string('description')->nullable(); // optionnel : pourquoi le changement

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matricule_rotation');
    }
};
