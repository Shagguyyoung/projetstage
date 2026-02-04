<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\dashboardController;

// ********PAGES D'ACCEUIL******* //

Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/ebe', [homeController::class, 'ebe'])->name('ebe');
Route::get('/eme', [homeController::class, 'eme'])->name('eme');
Route::get('/ede', [homeController::class, 'ede'])->name('ede');
Route::get('/eme_ismparis', [homeController::class, 'eme_ismparis'])->name('eme_ismparis');

// ******* DEBUT INSCRIPTIONS*******//
                        // ********INSCRIPTION COMPORTEMENTAL*********//
Route::get('/inscription_eme', [homeController::class, 'inscription_eme'])->name('inscription_eme');
Route::get('/inscription_psa', [homeController::class, 'inscription_psa'])->name('inscription_psa');
                          // ***********FIN**********//

                          //****INSCRIPTION BACHELOR**** */
Route::get('/inscription_finance', [homeController::class, 'inscription_finance'])->name('inscription_finance');
Route::get('/inscription_logistique', [homeController::class, 'inscription_logistique'])->name('inscription_logistique');
                       //****FIN*****/ 

                    //******INSCRIPTION COMPLEXITE******/
Route::get('/inscription_eme_generaliste', [homeController::class, 'inscription_eme_generaliste'])->name('inscription-eme_generaliste');
Route::get('/sign_eme_generaliste', [homeController::class, 'sign_eme_generaliste'])->name('sign_eme_generaliste');
                //******FIN******/

                //*****INSCRIPTION LOGISTIQUE******/
Route::get('/register_eme_logistique', [homeController::class, 'register_eme_logistique'])->name('register_eme_logistique');
Route::get('/register_eme_logistique_achat', [homeController::class, 'register_eme_logistique_achat'])->name('register_eme_logistique_achat');
Route::get('/register_eme_logistique_production', [homeController::class, 'register_eme_logistique_production'])->name('register_eme_logistique_production');
Route::get('/register_eme_logistique_distribution', [homeController::class, 'register_eme_logistique_distribution'])->name('register_eme_logistique_distibution');
                     //*******FIN********/
                     
                     //**********INSCRIPTION FINANCE*******/
Route::get('/sign_eme_finance_ingenerie', [homeController::class, 'sign_eme_finance_ingenerie'])->name('sign_eme_finance_ingenerie');
Route::get('/sign_eme_finance', [homeController::class, 'sign_eme_finance'])->name('sign_eme_finance');
Route::get('/register_eme_finance', [homeController::class, 'register_eme_finance'])->name('register_eme_finance');
                    //****FIN*******/

                    //********INSCRIPTION DATA********/
Route::get('/register_eme_data', [homeController::class, 'register_eme_data'])->name('register_eme_data');
Route::get('/sign_eme_data', [homeController::class, 'sign_eme_data'])->name('sign_eme_data');
Route::get('/ia_eme_data', [homeController::class, 'ia_eme_data'])->name('ia_eme_data');
Route::get('/tal_eme_data', [homeController::class, 'tal_eme_data'])->name('tal_eme_data');
                  //******FIN*******/
// ********FIN INSCRIPTION******//

//*****************************EBE PAGES************************ */
Route::get('/bachelor_finance', [homeController::class, 'bachelor_finance'])->name('bachelor_finance');
Route::get('/logistique', [homeController::class, 'logistique'])->name('logistique');

//************EME PAGES******************* */
Route::get('/Emepsa', [homeController::class, 'Emepsa'])->name('Emepsa');
Route::get('/eme_generaliste', [homeController::class, 'eme_generaliste'])->name('eme_generaliste');
Route::get('/eme_logistique', [homeController::class, 'eme_logistique'])->name('eme_logistique');
Route::get('/eme_finance', [homeController::class, 'eme_finance'])->name('eme_finance');
Route::get('/eme_data', [homeController::class, 'eme_data'])->name('eme_data');

///**************PAGES BACHELOR************* */
Route::get('/programme', [homeController::class, 'programme'])->name('programme');
Route::get('/equipe_pedagogique', [homeController::class, 'equipe_pedagogique'])->name('equipe_pedagogique');
Route::get('/conditions', [homeController::class, 'conditions'])->name('conditions');
Route::get('/modalites', [homeController::class, 'modalites'])->name('modalites');
Route::get('/programme_logistique', [homeController::class, 'programme_logistique'])->name('programme_logistique');
Route::get('/equipe_logistique', [homeController::class, 'equipe_logistique'])->name('equipe_logistique');
Route::get('/conditions_logistique', [homeController::class, 'conditions_logistique'])->name('conditions_logistique');
Route::get('/modalites_logistique', [homeController::class, 'modalites_logistique'])->name('modalites_logistique');

// *********PAGES COMPORTEMENTAL**********//
Route::get('/programme_psa', [homeController::class, 'programme_psa'])->name('programme_psa');
Route::get('/equipe_psa', [homeController::class, 'equipe_psa'])->name('equipe_psa');
Route::get('/conditions_psa', [homeController::class, 'conditions_psa'])->name('conditions_psa');
Route::get('/modalites_psa', [homeController::class, 'modalites_psa'])->name('modalites_psa');

// *********PAGES COMPLEXITE********//
Route::get('/programme_2', [homeController::class, 'programme_2'])->name('programme_2');
Route::get('/equipe_2', [homeController::class, 'equipe_2'])->name('equipe_2');
Route::get('/conditions_2', [homeController::class, 'conditions_2'])->name('conditions_2');
Route::get('/modalites_2', [homeController::class, 'modalites_2'])->name('modalites_2');

// *******PAGES LOGISTIQUE*******//
Route::get('/programme_1', [homeController::class, 'programme_1'])->name('programme_1');
Route::get('/equipe_1', [homeController::class, 'equipe_1'])->name('equipe_1');
Route::get('/conditions_1', [homeController::class, 'conditions_1'])->name('conditions_1');
Route::get('/modalites_1', [homeController::class, 'modalites_1'])->name('modalites_1');

// ********PAGES FINANCE*********//
Route::get('/programme_4', [homeController::class, 'programme_4'])->name('programme_4');
Route::get('/equipe_4', [homeController::class, 'equipe_4'])->name('equipe_4');
Route::get('/conditions_4', [homeController::class, 'conditions_4'])->name('conditions_4');
Route::get('/modalites_4', [homeController::class, 'modalites_4'])->name('modalites_4');

// ******PAGES DATA*******/
Route::get('/programme_5', [homeController::class, 'programme_5'])->name('programme_5');
Route::get('/equipe_5', [homeController::class, 'equipe_5'])->name('equipe_5');
Route::get('/conditions_5', [homeController::class, 'conditions_5'])->name('conditions_5');
Route::get('/modalites_5', [homeController::class, 'modalites_5'])->name('modalites_5');

//********PAGES EDE******** */
Route::get('/programme_10', [homeController::class, 'programme_10'])->name('programme_10');
Route::get('/equipe_10', [homeController::class, 'equipe_10'])->name('equipe_10');
Route::get('/conditions_10', [homeController::class, 'conditions_10'])->name('conditions_10');
Route::get('/modalites_10', [homeController::class, 'modalites_10'])->name('modalites_10');