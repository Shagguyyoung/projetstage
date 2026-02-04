<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();

            // Relation avec l'auditeur
            $table->unsignedBigInteger('auditeur_id');
            $table->foreign('auditeur_id')
                  ->references('id_auditeur')  // correspond à ta table auditeurs
                  ->on('auditeurs')
                  ->onDelete('cascade');

            
            $table->decimal('montant', 10, 2);
            $table->dateTime('date_paiement')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('mode_paiement');        // espece / carte / virement / cheque
            $table->string('reference')->nullable(); // référence du paiement
            $table->string('img')->nullable();       // image du reçu
            $table->string('type_versement')->nullable(); // tranche, acompte, règlement
            $table->string('agence')->nullable();    // agence bancaire ou lieu

            $table->unsignedTinyInteger('statut')->default(1); // 1 = valide, 2 = en attente, 3 = refusé
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paiements');
    }
};
