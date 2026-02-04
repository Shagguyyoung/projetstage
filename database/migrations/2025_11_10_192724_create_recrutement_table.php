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
        Schema::create('recrutements', function (Blueprint $table) {
            $table->bigIncrements('id_recrutement'); // AUTO_INCREMENT
            $table->unsignedBigInteger('auditeur_id')->nullable();
            $table->string('recu')->nullable();
            $table->tinyInteger('dossier')->default(0);
            $table->boolean('refus')->default(0);
            $table->boolean('prospere')->default(0);
            $table->timestamps(); // created_at et updated_at

            // Clé étrangère
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
        Schema::dropIfExists('recrutements');
    }
};
