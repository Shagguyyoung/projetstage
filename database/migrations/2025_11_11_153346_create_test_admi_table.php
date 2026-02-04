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
        Schema::create('test_admi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auditeur_id')->unique();
            $table->integer('nb_mess')->default(0);
            $table->boolean('etat_test')->default(0); // 0 = Non commencé, 1 = Commencé/Accepté
            $table->timestamps();

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
        Schema::dropIfExists('test_admi');
    }
};
