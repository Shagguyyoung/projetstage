<?php


use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('Dashboard')->group(function () {
    Route::get('/', [dashboardController::class, 'Connexion'])->name('Connexion');
});

Route::prefix('Dashboard')->group(function () {
    Route::get('/accueil', [dashboardController::class, 'Accueil'])->name('Accueil');
});




Route::prefix('Dashboard')->group(function () {

    // Page Admission
    Route::get('/Admission', [DashboardController::class, 'Admission'])->name('Admission');

    // Mise à jour dynamique de la decision et du centre via AJAX
    Route::post('/Admission/update-decision', [DashboardController::class, 'updateDecision'])->name('admission.updateDecision');
    Route::post('/Admission/update-centre', [DashboardController::class, 'updateCentre'])->name('admission.updateCentre');

});


Route::prefix('Dashboard')->group(function () {
    Route::get('/Mouvement', [dashboardController::class, 'Mouvement'])->name('Mouvement');
});

#####Recrutement
Route::prefix('Dashboard')->group(function () {

    // 📌 Liste Recrutement (par école)
    Route::get('/Recrutement', [dashboardController::class, 'recrutement'])
    ->name('recrutement');




        Route::put('/Recrutement/{ecole}/{auditeur}', [dashboardController::class, 'update'])
        ->name('recrutement.update');

    // 📌 Suppression d’un auditeur dans une école donnée
    Route::delete('/Recrutement/{ecole}/{auditeur}', [dashboardController::class, 'destroy'])
        ->name('recrutement.destroy');
});




Route::prefix('Dashboard')->group(function () {

    // Page Test Admission
    Route::get('/Test_admission', [DashboardController::class, 'Test_admission'])
        ->name('Test_admission');

    // Envoi de message pour un auditeur
    Route::post('/Test_admission/{auditeur}/envoyer-message', [DashboardController::class, 'envoyerMessage'])
        ->name('recrutement.envoyer_message');
});



Route::prefix('Dashboard')->group(function () {
    // Page principale des versements
    Route::get('/Versement', [DashboardController::class, 'Versement'])->name('Versement');

    // Stockage des échéances depuis la modal

Route::post('/Versement', [DashboardController::class, 'store'])->name('echeances.store');

    // Mise à jour de l'état d'un auditeur (via AJAX)
    Route::post('/Versement/update-Etat', [DashboardController::class, 'updateEtat'])->name('echeancier.updateEtat');
});



Route::prefix('Dashboard')->group(function () {
    Route::get('/Utilisateur', [dashboardController::class, 'Utilisateur'])->name('Utilisateur');
});


Route::prefix('Dashboard')->group(function () {
    Route::get('/Abandon', [dashboardController::class, 'Abandon'])->name('Abandon');

         Route::post('/Abandon/Abandonner/{id}', [dashboardController::class, 'abandonAuditeur'])
    ->name('auditeur.abandon');
});


Route::prefix('Dashboard')->group(function () {
    Route::get('/Re-inscrit', [dashboardController::class, 'Re_inscrit'])->name('Re-inscrit');
});


Route::prefix('Dashboard')->group(function () {
    Route::get('/Report', [dashboardController::class, 'Report'])->name('Report');
     Route::post('/Report/Reporter/{id}', [dashboardController::class, 'ReportAuditeur'])
    ->name('auditeur.Report');
});
Route::prefix('Dashboard')->group(function () {
    Route::get('/Prospere', [dashboardController::class, 'prospere'])->name('prospere');

    Route::post('/Prospere/reinscrire/{id}', [dashboardController::class, 'reinscrireAuditeur'])
    ->name('auditeur.reinscrire');

});

Route::prefix('Dashboard')->group(function () {
    Route::get('/add_file', [dashboardController::class, 'Add_files'])->name('Add_files');
});


Route::prefix('Dashboard')->group(function () {
    Route::get('/add_promo', [dashboardController::class, 'add_promo'])->name('add_promo');
    Route::post('/add_promo', [dashboardController::class, 'storepromo'])->name('dashboard.promotions.store');
});

#####
Route::prefix('Dashboard')->group(function () {
    Route::get('/add_school', [DashboardController::class, 'add_school'])->name('add_school');
    Route::post('/add_school', [DashboardController::class, 'storeschool'])->name('dashboard.ecoles.store');
    Route::put('/add_school/{ecole}', [DashboardController::class, 'updateschool'])->name('dashboard.ecoles.update');

    Route::delete('/add_school/{ecole}', [DashboardController::class, 'destroyschool'])->name('dashboard.ecoles.destroy');
});



#####
Route::prefix('Dashboard')->group(function () {
    Route::get('/see_file', [dashboardController::class, 'see_file'])->name('see_file');
});




Route::get('/404', [dashboardController::class, 'Error404'])->name('404');
Route::get('/403', [dashboardController::class, 'Error403'])->name('403');
Route::get('/504', [dashboardController::class, 'Error504'])->name('504');



#####test

Route::get('/test1', [dashboardController::class, 'test1'])->name('test1'); // Affiche le formulaire
Route::post('/test1', [dashboardController::class, 'storeTest1'])->name('test1.ajout'); // Traite le formulaire



