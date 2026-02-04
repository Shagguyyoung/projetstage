<?php

namespace App\Http\Controllers;
use App\Models\Auditeur;
use App\Models\classe;

use App\Models\Recrutement;
use Illuminate\Http\Request;
use App\Models\TestAdmi;
use App\Models\Admission;
use App\Models\Ecole;
use App\Models\Filiere;
use App\Models\Promotion;
use App\Models\Echeancier;
use App\Models\Echeance;
use Illuminate\Support\Str;


class dashboardController extends Controller
{
      public function Connexion()
    {
        return view('dashboard/pages/auth/login');
    }

     public function Accueil()
    {
        return view('dashboard/pages/index');
    }


    public function Utilisateur()
    {
        return view('dashboard/pages/user_list');
    }






  public function Admission(Request $request)
{
    // 📌 Récupération de toutes les classes pour le menu de filtrage
    $classes = Classe::with('filiere')
        ->orderBy('nom')
        ->get();

    // 📌 Récupération ID école dans l'URL ?ecole=3
    $ecoleId = $request->query('ecole');

    // 📌 Récupération de l’école choisie
    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupération liste simple des écoles pour le menu supérieur
    $ecoles = Ecole::select('id', 'abreviation')
        ->orderBy('abreviation')
        ->get();

    // 📌 Récupérer toutes les lignes TestAdmi
    $tests = TestAdmi::all();

    foreach ($tests as $test) {
        // Vérifier si l'admission existe déjà
        $admission = Admission::where('auditeur_id', $test->auditeur_id)->first();

        if ($test->etat_test == 1) {
            // Créer admission si manquante
            if (!$admission) {
                Admission::create([
                    'auditeur_id' => $test->auditeur_id,
                    'decision' => 0,
                    'centre' => 1,
                ]);
            }
        } else {
            // Supprimer admission si test == 0
            if ($admission) {
                $admission->delete();
            }
        }
    }

    // 📌 Récupération de toutes les admissions avec les auditeurs
    // + filtrage par école si $ecoleId est présent
    $admissions = Admission::with(['auditeur.classes.filiere'])
        ->whereHas('auditeur.classes.filiere', function ($query) use ($ecoleId) {
            if ($ecoleId) {
                $query->where('ecole_id', $ecoleId);
            }
        })
        ->get();

    return view('dashboard.pages.admission', compact(
        'admissions',
        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie'
    ));
}






public function updateDecision(Request $request)
{
    $admission = Admission::firstOrCreate(
        ['auditeur_id' => $request->auditeur_id],
        ['decision' => 0, 'centre' => 1]
    );

    $admission->decision = $request->decision;
    $admission->save();

    return response()->json(['success' => true]);
}

public function updateCentre(Request $request)
{
    $admission = Admission::firstOrCreate(
        ['auditeur_id' => $request->auditeur_id],
        ['decision' => 0, 'centre' => 1]
    );

    $admission->centre = $request->centre;
    $admission->save();

    return response()->json(['success' => true]);
}









public function Mouvement(Request $request)
{
    $ecoleId = $request->ecole;
    $ecoleName = \App\Models\Ecole::find($ecoleId)?->abreviation ?? '';

    return view('dashboard/pages/mouvements', compact('ecoleName'));
}


public function recrutement(Request $request)
{
    // 📌 Récupérer l'ID de l'école depuis la query string ?ecole=3
    $ecoleId = $request->query('ecole');

    // 📌 Récupérer l'école choisie si elle existe
    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // Filtrer seulement si une école est sélectionnée
    $auditeurs = Auditeur::with(['classes.filiere.ecole'])
        ->when($ecoleId, function ($query) use ($ecoleId) {
            $query->whereHas('classes.filiere', function ($q) use ($ecoleId) {
                $q->where('ecole_id', $ecoleId);
            });
        })
        ->orderBy('nom')
        ->get();

    // 📌 Récupération de toutes les classes pour le menu de filtrage
    $classes = Classe::with('filiere')
        ->orderBy('nom')
        ->get();

    // 📌 Récupération de toutes les écoles pour le menu supérieur
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    // 📌 Retourner la vue avec toutes les variables nécessaires
    return view('dashboard.pages.recrutement', compact(
        'auditeurs',
        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie'
    ));
}





public function update(Request $request, $ecole, $auditeur)
{
    // 🔍 Vérifier que l'auditeur existe réellement
    $auditeurModel = Auditeur::find($auditeur);

    if (!$auditeurModel) {
        return back()->with('error', 'Auditeur introuvable ❌');
    }

    // 🔍 Chercher ou créer le recrutement lié
    $recrutement = Recrutement::firstOrCreate(
        ['auditeur_id' => $auditeur]
    );

    // 🟢 Mise à jour du reçu
    if ($request->has('recu')) {
        $recrutement->recu = $request->recu; // 0 ou 1
    }

    // 🔴 Mise à jour du refus
    if ($request->has('refus')) {
        $recrutement->refus = $request->refus; // toujours 1
    }

    // 🔴 Mise à jour du refus
    if ($request->has('prospere')) {
        $recrutement->prospere = $request->prospere; // toujours 1
    }

    // 📁 Mise à jour du dossier
    if ($request->has('dossier')) {
        $recrutement->dossier = $request->dossier;
    }

    $recrutement->save();

    return back()->with('success', 'Recrutement mis à jour ✅');
}



public function destroy($ecole, Auditeur $auditeur)
{
    $auditeur->delete();

    return response()->json([
        'success' => true,
        'message' => 'Auditeur supprimé avec succès'
    ]);
}




############










  public function Test_admission(Request $request)
{
    // 📌 Récupérer l'ID de l'école depuis la query string ?ecole=3
    $ecoleId = $request->query('ecole');

    // 📌 Récupérer l'école choisie si elle existe
    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 On récupère tous les recrutements qui ont refus = 0 et dossier = 3 ou 4
    // et qui appartiennent à une école spécifique si $ecoleId est défini
    $recrutements = Recrutement::where('refus', 0)
        ->whereIn('dossier', [3, 4])
        ->whereHas('auditeur.classes.filiere', function ($query) use ($ecoleId) {
            if ($ecoleId) {
                $query->where('ecole_id', $ecoleId);
            }
        })
        ->with(['auditeur.classes.filiere.ecole'])
        ->get();

 $classes = Classe::with('filiere')->get();
    // 📌 Récupération de toutes les écoles pour le menu supérieur
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    return view('dashboard.pages.test_admission', compact(
        'recrutements',
        'ecoles',
        'ecoleId',
        'ecoleChoisie',
        'classes'
    ));
}

public function Versement(Request $request)
{
    // 📌 Récupérer l'ID de l'école depuis la query string ?ecole=3
    $ecoleId = $request->query('ecole');
    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupération de toutes les classes pour le menu
    $classes = Classe::with('filiere')->get();

    // 📌 Récupération de toutes les écoles pour le menu supérieur
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    // 1️⃣ Récupérer les auditeurs admis
    $auditeursAdmisIds = Admission::where('decision', 1)->pluck('auditeur_id')->toArray();

    // 2️⃣ Supprimer de echeanciers ceux qui ne sont plus admis
    \App\Models\Echeancier::whereNotIn('auditeur_id', $auditeursAdmisIds)->delete();

    // 3️⃣ Créer des echeanciers pour les auditeurs admis qui n'ont pas encore d'échéancier
    foreach ($auditeursAdmisIds as $auditeurId) {
        if (!\App\Models\Echeancier::where('auditeur_id', $auditeurId)->exists()) {
            \App\Models\Echeancier::create([
                'auditeur_id' => $auditeurId,
                'montant_total' => 300000,
                'date_debut' => now(),
                'date_fin' => now()->addMonths(3),
                'Engagement' => 0,
                'statut' => 1,
                'Etat' => 0,
            ]);
        }
    }

    // 🔹 Récupérer les echeanciers avec leurs auditeurs et classes via la relation Many-to-Many
    $echeanciers = \App\Models\Echeancier::with(['auditeur.classes.filiere.ecole'])
        ->when($ecoleId, function ($query) use ($ecoleId) {
            $query->whereHas('auditeur.classes.filiere', function ($q) use ($ecoleId) {
                $q->where('ecole_id', $ecoleId);
            });
        })
        ->get();

    return view('dashboard.pages.versement', compact(
        'ecoles',
        'ecoleId',
        'ecoleChoisie',
        'classes',
        'echeanciers'
    ));
}



    /**
     * Mettre à jour l'état de l'auditeur
     */


public function store(Request $request)
{
    // Validation simple
    $request->validate([
        'echeancier_id' => 'required|exists:echeanciers,id',
        'dates'         => 'required|array|min:1',
        'montants'      => 'required|array|min:1',
        'dates.*'       => 'required|date',
        'montants.*'    => 'required|numeric|min:0',
    ]);

    $echeancier = Echeancier::findOrFail($request->echeancier_id);

    // Calcul total des échéances
    $totalEcheances = array_sum($request->montants);

    if ($totalEcheances != $echeancier->montant_total) {
        return redirect()->back()->with('error', 'La somme des échéances doit correspondre au montant total.');
    }

    // Supprimer les anciennes échéances pour cet échéancier
    $echeancier->echeances()->delete();

    // Enregistrer chaque ligne d'échéance avec le même echeancier_id
    foreach ($request->dates as $index => $date) {
        Echeance::create([
            'echeancier_id'   => $echeancier->id,
            'date_echeance'   => $date,
            'montant_attendu' => $request->montants[$index],
            'statut'          => $index + 1, // ordre dans l'échéancier
        ]);
    }

    return redirect()->back()->with('success', 'Échéances enregistrées avec succès !');
}








public function updateEtat(Request $request)
{
    $request->validate([
        'echeancier_id' => 'required|exists:echeanciers,id',
        'Etat' => 'required|in:0,1,2,3',
    ]);

    $e = Echeancier::find($request->echeancier_id);

    $e->Etat = $request->input('Etat');  // <<< jamais null
    $e->save();

    return back()->with('success', 'État mis à jour.');
}









public function Abandon(Request $request)
{
    $ecoleId = $request->query('ecole');

    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupérer les auditeurs ayant un échéancier avec etat == 2
    $auditeurs = Auditeur::with(['classes.filiere.ecole'])
        ->whereHas('echeanciers', function ($q) {
            $q->where('etat', 1);   // 🔥 clé principale demandée
        })
        ->when($ecoleId, function ($query) use ($ecoleId) {
            $query->whereHas('classes.filiere', function ($q) use ($ecoleId) {
                $q->where('ecole_id', $ecoleId);
            });
        })
        ->orderBy('nom')
        ->get();

    $classes = Classe::with('filiere')->orderBy('nom')->get();
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    return view('dashboard/pages/abandon', compact(
        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie',
        'auditeurs' // ❗ n'oublie pas de renvoyer les auditeurs récupérés
    ));
}
public function abandonAuditeur(Request $request, $id)
{
    $request->validate([
        'classe_id' => 'required|exists:classes,id'
    ]);

    \App\Models\Auditeur::$ignoreHooks = true;

    $auditeur = Auditeur::findOrFail($id);
    $ancienMatricule = $auditeur->Matricule;
    $mailOriginal    = $auditeur->mail;
    $uuidOriginal    = $auditeur->uuid;
    $centreOriginal  = $auditeur->centre;
    $auditeurData = $auditeur->toArray();

    $classe = Classe::with('filiere.ecole')->find($request->classe_id);
    $ecole  = $classe->filiere->ecole;

    // Préfixe pour tous les reports de la classe
    $prefix = $ecole->abreviation . $classe->nom;
    $reportPrefix = '9';

    // 🔹 Récupérer tous les matricules existants pour cette classe et ce préfixe (ignore le centre)
    $matriculesExistants = Auditeur::where('matricule', 'like', $prefix . $reportPrefix . '%')
        ->pluck('matricule')
        ->toArray();

    // 🔹 Trouver le dernier numéro utilisé
    $lastNumber = 0;
    foreach ($matriculesExistants as $matricule) {
        if (preg_match('/' . $reportPrefix . '(\d+)$/', $matricule, $matches)) {
            $num = (int) $matches[1];
            if ($num > $lastNumber) $lastNumber = $num;
        }
    }

    $nextNumber = $lastNumber + 1;
    $numero = str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

    // 🔹 Nouveau matricule incluant le centre
    $nouveauMatricule = $prefix . strtoupper($centreOriginal) . $reportPrefix . $numero;

    // 🔹 Création du nouvel auditeur
    $newAuditeur = Auditeur::create([
        'matricule'         => $nouveauMatricule,
        'nom'               => $auditeurData['nom'],
        'prenoms'           => $auditeurData['prenoms'],
        'mail'              => $mailOriginal,
        'pays_residence'    => $auditeurData['pays_residence'],
        'indicatif_pays'    => $auditeurData['indicatif_pays'],
        'contact_tel'       => $auditeurData['contact_tel'],
        'numero_whatsapp'   => $auditeurData['numero_whatsapp'],
        'mot_de_passe'      => $auditeurData['mot_de_passe'],
        'centre'            => $centreOriginal,
        'ville_naissance'   => $auditeurData['ville_naissance'],
        'pays_naissance'    => $auditeurData['pays_naissance'],
        'ville_residence'   => $auditeurData['ville_residence'],
        'genre'             => $auditeurData['genre'],
        'genre_dossier'     => $auditeurData['genre_dossier'],
        'extrait'           => $auditeurData['extrait'],
        'carte_nationalite' => $auditeurData['carte_nationalite'],
        'photo'             => $auditeurData['photo'],
        'uuid'              => $uuidOriginal,
    ]);

    \App\Models\Auditeur::$ignoreHooks = false;

    // Attacher classe
    $newAuditeur->classes()->attach($request->classe_id);

    // Tracer rotation
    \App\Models\MatriculeRotation::create([
        'ancien_matricule'  => $ancienMatricule,
        'nouveau_matricule' => $nouveauMatricule,
        'description'       => "Abandon_Report"
    ]);

    // Créer Echéancier
    \App\Models\Echeancier::create([
        'auditeur_id'    => $newAuditeur->id_auditeur,
        'montant_total'  => 300000,
        'date_debut'     => now(),
        'date_fin'       => now()->addMonths(3),
        'Engagement'     => 0,
        'statut'         => 1,
        'Etat'           => 0,
    ]);

    // Recrutement
    \App\Models\Recrutement::firstOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['dossier' => 4, 'recu' => 0, 'refus' => 0, 'prospere' => 0]
    );

    // TestAdmi
    \App\Models\TestAdmi::updateOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['etat_test' => 1, 'nb_mess' => 0]
    );

    // Admission
    \App\Models\Admission::updateOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['decision' => 1, 'centre' => $centreOriginal]
    );

    return redirect()->back()->with('success',
        "Auditeur réinscrit. Nouveau matricule : $nouveauMatricule");
}
    public function Re_inscrit(Request $request)
{
    $ecoleId = $request->query('ecole');

    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupérer les auditeurs dont le recrutement a prospere == 1
    // $auditeurs = Auditeur::with(['classes.filiere.ecole'])
    //     ->whereHas('recrutement', function ($q) {
    //         $q->where('prospere', 1);
    //     })
    //     ->when($ecoleId, function ($query) use ($ecoleId) {
    //         $query->whereHas('classes.filiere', function ($q) use ($ecoleId) {
    //             $q->where('ecole_id', $ecoleId);
    //         });
    //     })
    //     ->orderBy('nom')
    //     ->get();

    $classes = Classe::with('filiere')->orderBy('nom')->get();
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    return view('dashboard/pages/reinscription', compact(

        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie'
    ));
}




public function Report(Request $request)
{
    $ecoleId = $request->query('ecole');

    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupérer les auditeurs ayant un échéancier avec etat == 2
    $auditeurs = Auditeur::with(['classes.filiere.ecole'])
        ->whereHas('echeanciers', function ($q) {
            $q->where('etat', 2);   // 🔥 clé principale demandée
        })
        ->when($ecoleId, function ($query) use ($ecoleId) {
            $query->whereHas('classes.filiere', function ($q) use ($ecoleId) {
                $q->where('ecole_id', $ecoleId);
            });
        })
        ->orderBy('nom')
        ->get();

    $classes = Classe::with('filiere')->orderBy('nom')->get();
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    return view('dashboard/pages/report', compact(
        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie',
        'auditeurs' // ❗ n'oublie pas de renvoyer les auditeurs récupérés
    ));
}

public function reportAuditeur(Request $request, $id)
{
    $request->validate([
        'classe_id' => 'required|exists:classes,id'
    ]);

    \App\Models\Auditeur::$ignoreHooks = true;

    $auditeur = Auditeur::findOrFail($id);
    $ancienMatricule = $auditeur->Matricule;
    $mailOriginal    = $auditeur->mail;
    $uuidOriginal    = $auditeur->uuid;
    $centreOriginal  = $auditeur->centre;
    $auditeurData = $auditeur->toArray();

    $classe = Classe::with('filiere.ecole')->find($request->classe_id);
    $ecole  = $classe->filiere->ecole;

    // Préfixe pour tous les reports de la classe
    $prefix = $ecole->abreviation . $classe->nom;
    $reportPrefix = '9';

    // 🔹 Récupérer tous les matricules existants pour cette classe et ce préfixe (ignore le centre)
    $matriculesExistants = Auditeur::where('matricule', 'like', $prefix . $reportPrefix . '%')
        ->pluck('matricule')
        ->toArray();

    // 🔹 Trouver le dernier numéro utilisé
    $lastNumber = 0;
    foreach ($matriculesExistants as $matricule) {
        if (preg_match('/' . $reportPrefix . '(\d+)$/', $matricule, $matches)) {
            $num = (int) $matches[1];
            if ($num > $lastNumber) $lastNumber = $num;
        }
    }

    $nextNumber = $lastNumber + 1;
    $numero = str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

    // 🔹 Nouveau matricule incluant le centre
    $nouveauMatricule = $prefix . strtoupper($centreOriginal) . $reportPrefix . $numero;

    // 🔹 Création du nouvel auditeur
    $newAuditeur = Auditeur::create([
        'matricule'         => $nouveauMatricule,
        'nom'               => $auditeurData['nom'],
        'prenoms'           => $auditeurData['prenoms'],
        'mail'              => $mailOriginal,
        'pays_residence'    => $auditeurData['pays_residence'],
        'indicatif_pays'    => $auditeurData['indicatif_pays'],
        'contact_tel'       => $auditeurData['contact_tel'],
        'numero_whatsapp'   => $auditeurData['numero_whatsapp'],
        'mot_de_passe'      => $auditeurData['mot_de_passe'],
        'centre'            => $centreOriginal,
        'ville_naissance'   => $auditeurData['ville_naissance'],
        'pays_naissance'    => $auditeurData['pays_naissance'],
        'ville_residence'   => $auditeurData['ville_residence'],
        'genre'             => $auditeurData['genre'],
        'genre_dossier'     => $auditeurData['genre_dossier'],
        'extrait'           => $auditeurData['extrait'],
        'carte_nationalite' => $auditeurData['carte_nationalite'],
        'photo'             => $auditeurData['photo'],
        'uuid'              => $uuidOriginal,
    ]);

    \App\Models\Auditeur::$ignoreHooks = false;

    // Attacher classe
    $newAuditeur->classes()->attach($request->classe_id);

    // Tracer rotation
    \App\Models\MatriculeRotation::create([
        'ancien_matricule'  => $ancienMatricule,
        'nouveau_matricule' => $nouveauMatricule,
        'description'       => "Report"
    ]);

    // Créer Echéancier
    \App\Models\Echeancier::create([
        'auditeur_id'    => $newAuditeur->id_auditeur,
        'montant_total'  => 300000,
        'date_debut'     => now(),
        'date_fin'       => now()->addMonths(3),
        'Engagement'     => 0,
        'statut'         => 1,
        'Etat'           => 0,
    ]);

    // Recrutement
    \App\Models\Recrutement::firstOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['dossier' => 4, 'recu' => 0, 'refus' => 0, 'prospere' => 0]
    );

    // TestAdmi
    \App\Models\TestAdmi::updateOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['etat_test' => 1, 'nb_mess' => 0]
    );

    // Admission
    \App\Models\Admission::updateOrCreate(
        ['auditeur_id' => $newAuditeur->id_auditeur],
        ['decision' => 1, 'centre' => $centreOriginal]
    );

    return redirect()->back()->with('success',
        "Auditeur réinscrit. Nouveau matricule : $nouveauMatricule");
}







public function prospere(Request $request)
{
    $ecoleId = $request->query('ecole');

    $ecoleChoisie = $ecoleId ? Ecole::find($ecoleId) : null;

    // 📌 Récupérer les auditeurs dont le recrutement a prospere == 1
    $auditeurs = Auditeur::with(['classes.filiere.ecole'])
        ->whereHas('recrutement', function ($q) {
            $q->where('prospere', 1);
        })
        ->when($ecoleId, function ($query) use ($ecoleId) {
            $query->whereHas('classes.filiere', function ($q) use ($ecoleId) {
                $q->where('ecole_id', $ecoleId);
            });
        })
        ->orderBy('nom')
        ->get();

    $classes = Classe::with('filiere')->orderBy('nom')->get();
    $ecoles = Ecole::select('id', 'abreviation')->orderBy('abreviation')->get();

    return view('dashboard.pages.prospere', compact(
        'auditeurs',
        'classes',
        'ecoles',
        'ecoleId',
        'ecoleChoisie'
    ));
}

public function reinscrireAuditeur(Request $request, $id)
{
    // 🔹 Validation
    $request->validate([
        'classe_id' => 'required|exists:classes,id'
    ]);

    // 🔹 Auditeur original
    $auditeur = Auditeur::findOrFail($id);

    // 🔹 Conserver toutes les données avant suppression
    $ancienMatricule = $auditeur->Matricule;
    $mailOriginal    = $auditeur->mail;
    $uuidOriginal    = $auditeur->uuid;
    $centreOriginal  = $auditeur->centre;

    $auditeurData = $auditeur->toArray();

    // 🔹 Supprimer l'ancien auditeur
    $auditeur->delete();

    // 🔹 Classe + école
    $classe = Classe::with('filiere.ecole')->find($request->classe_id);
    $ecole  = $classe->filiere->ecole;

    // 🔹 Calculer numéro unique dans la classe
    $count  = \DB::table('auditeur_classe')
        ->where('classe_id', $classe->id)
        ->count() + 1;
    $numero = str_pad($count, 3, '0', STR_PAD_LEFT);

    // 🔹 Générer matricule unique
    $nouveauMatricule = $ecole->abreviation
                      . $classe->nom
                      . strtoupper($centreOriginal)
                      . $numero;

    // 🔹 Créer le nouvel auditeur avec les mêmes infos
    $newAuditeur = Auditeur::create([
        'matricule'         => $nouveauMatricule,
        'nom'               => $auditeurData['nom'],
        'prenoms'           => $auditeurData['prenoms'],
        'mail'              => $mailOriginal,
        'pays_residence'    => $auditeurData['pays_residence'],
        'indicatif_pays'    => $auditeurData['indicatif_pays'],
        'contact_tel'       => $auditeurData['contact_tel'],
        'numero_whatsapp'   => $auditeurData['numero_whatsapp'],
        'mot_de_passe'      => $auditeurData['mot_de_passe'],
        'centre'            => $centreOriginal,
        'ville_naissance'   => $auditeurData['ville_naissance'],
        'pays_naissance'    => $auditeurData['pays_naissance'],
        'ville_residence'   => $auditeurData['ville_residence'],
        'genre'             => $auditeurData['genre'],
        'genre_dossier'     => $auditeurData['genre_dossier'],
        'extrait'           => $auditeurData['extrait'],
        'carte_nationalite' => $auditeurData['carte_nationalite'],
        'photo'             => $auditeurData['photo'],
        'uuid'              => $uuidOriginal,
    ]);

    // 🔹 Attacher à la nouvelle classe
    $newAuditeur->classes()->attach($request->classe_id);

    // 🔹 Enregistrer la rotation de matricule
    \App\Models\MatriculeRotation::create([
        'ancien_matricule'  => $ancienMatricule,
        'nouveau_matricule' => $nouveauMatricule,
        'description'       => "Réinscription "
    ]);

    // 🔹 Retourner sur la page précédente avec un message
    return redirect()->back()->with('success', "Auditeur réinscrit avec succès. Nouveau matricule : $nouveauMatricule");
}













      public function Add_files()
    {
        return view('dashboard/pages/add_file');
    }


################ ecole
     public function add_school()
    {
        $ecoles = Ecole::with('filieres')->get();
        return view('dashboard/pages/add_school', compact('ecoles'));
    }




    public function storeschool(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'abreviation' => 'required|string|max:20',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'lien_site' => 'nullable|url|max:255',
            'nom_filiere.*' => 'required|string|max:255',
            'abreviation_filiere.*' => 'required|string|max:20',
            'description.*' => 'nullable|string',
        ]);

        $ecole = Ecole::create([
            'nom' => $data['nom'],
            'abreviation' => $data['abreviation'],
            'telephone' => $data['telephone'] ?? null,
            'adresse' => $data['adresse'] ?? null,
            'lien_site' => $data['lien_site'] ?? null,
        ]);

        foreach ($data['nom_filiere'] as $key => $nomFiliere) {
            $ecole->filieres()->create([
                'nom' => $nomFiliere,
                'abreviation' => $data['abreviation_filiere'][$key],
                'description' => $data['description'][$key] ?? null,
            ]);
        }

        return redirect()->back()->with('success', 'École ajoutée avec succès !');
    }

    public function destroyschool(Ecole $ecole)
    {
        $ecole->delete();
        return redirect()->back()->with('success', 'École supprimée !');
    }



    public function updateSchool(Request $request, $id)
{
    $ecole = Ecole::findOrFail($id);

    // Mise à jour des informations de l'école
    $ecole->update([
        'nom' => $request->nom,
        'abreviation' => $request->abreviation,
        'telephone' => $request->telephone,
        'adresse' => $request->adresse,
        'lien_site' => $request->lien_site,
    ]);

    // Supprimer les anciennes filières et recréer les nouvelles
    $ecole->filieres()->delete();
    if($request->nom_filiere) {
        foreach($request->nom_filiere as $index => $nomFiliere){
            $ecole->filieres()->create([
                'nom' => $nomFiliere,
                'abreviation' => $request->abreviation_filiere[$index],
                'description' => $request->description[$index] ?? null,
            ]);
        }
    }

    // Redirection après sauvegarde
    return redirect('Dashboard/add_school')->with('success', 'École modifiée avec succès');
}

##################Promotion





    public function add_promo()
    {
        $ecoles = Ecole::all();
        $promotions = Promotion::with('ecole')->latest()->get();
        return view('Dashboard/pages/add_promo', compact('ecoles', 'promotions'));
    }

    public function storepromo(Request $request)
    {
        $request->validate([
            'ecole_id' => 'required|exists:ecoles,id',
            'nom' => 'required|string',
            'annee_debut' => 'required|digits:4|integer',
            'annee_fin' => 'required|digits:4|integer|gte:annee_debut',
            'type_rentree' => 'required|in:normale,decalee',
        ]);

        Promotion::create($request->all());

        return redirect()->back()->with('success', 'Promotion et classes créées avec succès !');
    }



#######
      public function See_file()
    {
        return view('dashboard/pages/see_files');
    }


##########test

    // Affiche le formulaire
   public function test1()
{
    // Charger les écoles avec leurs filières et classes
    $ecoles = Ecole::with('filieres.classes')->get();

    // Retourner la vue en passant les données
    return view('test.test1', compact('ecoles'));
}


    // Traite le formulaire
       // Traite le formulaire



public function storeTest1(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenoms' => 'required|string|max:255',
        'mail' => 'required|email',
        'extrait' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'carte_nationalite' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'mot_de_passe' => 'required|string|min:6',
        'genre' => 'required|string',
        'genre_dossier' => 'required|string',
        'classe_id' => 'required|exists:classes,id',
    ]);

    // 🔹 Récupérer classe et école
    $classe = Classe::with('filiere.ecole')->find($request->classe_id);
    $ecole = $classe->filiere->ecole;

    // 🔹 Calculer numéro dans la classe
    $count = $classe->auditeurs()->count() + 1;
    $numero = str_pad($count, 3, '0', STR_PAD_LEFT);

    // 🔹 Générer matricule
    $matricule = $ecole->abreviation . $classe->nom . strtoupper($request->centre) . $numero;

    // 🔹 Générer un "UUID humain" : mélange lettres + chiffres + tirets
    function generateHumanUUID($length = 8) {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $part1 = substr(str_shuffle($chars), 0, 3);
        $part2 = substr(str_shuffle($chars), 0, 3);
        $part3 = substr(str_shuffle($chars), 0, 2);
        return "$part1-$part2$part3"; // ex : A22-AZA12
    }

    $humanUUID = generateHumanUUID();

    // 🔹 Créer auditeur
    $auditeur = Auditeur::create([
        'matricule' => $matricule,
        'uuid' => $humanUUID,
        'nom' => $request->nom,
        'prenoms' => $request->prenoms,
        'mail' => $request->mail,
        'pays_residence' => $request->pays_residence,
        'indicatif_pays' => $request->indicatif_pays,
        'contact_tel' => $request->contact_tel,
        'numero_whatsapp' => $request->numero_whatsapp,
        'mot_de_passe' => $request->mot_de_passe,
        'centre' => $request->centre,
        'ville_naissance' => $request->ville_naissance,
        'pays_naissance' => $request->pays_naissance,
        'ville_residence' => $request->ville_residence,
        'genre' => $request->genre,
        'genre_dossier' => $request->genre_dossier,
    ]);

    // 🔹 Gestion fichiers avec le "UUID humain"
    foreach(['extrait','photo','carte_nationalite'] as $file) {
        if ($request->hasFile($file)) {
            $uploaded = $request->file($file);
            $folder = match($file) {
                'photo' => 'photos',
                'extrait' => 'extraits',
                'carte_nationalite' => 'cartes',
            };
            $pathFolder = public_path($folder);
            if(!file_exists($pathFolder)) mkdir($pathFolder, 0777, true);

            $fileName = $humanUUID . '_' . $file . '.' . $uploaded->getClientOriginalExtension();
            $uploaded->move($pathFolder, $fileName);
            $auditeur->$file = "$folder/$fileName";
        }
    }

    $auditeur->save();

    // 🔹 Lier à la classe
    $auditeur->classes()->attach($request->classe_id);

    return redirect()->route('test1')
        ->with('success', "Auditeur enregistré avec succès ! Matricule : $matricule");
}






#########





  public function Error404(Request $request)
    {
        // Récupère l'URL précédente et la passe à la vue (sécurisé)
        $previous = url()->previous();
        return response()->view('errors.404', ['previousUrl' => $previous], 404);
    }

    public function Error403(Request $request)
    {
        // Récupère l'URL précédente et la passe à la vue (sécurisé)
        $previous = url()->previous();
        return response()->view('errors.403', ['previousUrl' => $previous], 403);
    }


     public function Error504(Request $request)
    {
        // Récupère l'URL précédente et la passe à la vue (sécurisé)
        $previous = url()->previous();
        return response()->view('errors.504', ['previousUrl' => $previous], 504);
    }
















##########test d'admission



public function ajouterTestAdmi()
{
    $recrutements = Recrutement::where('refus', 0)
        ->whereIn('dossier', [3, 4])
        ->get();

    foreach ($recrutements as $recrutement) {
        // On vérifie si l'auditeur n'existe pas déjà dans test_admi
        TestAdmi::firstOrCreate(
            ['auditeur_id' => $recrutement->auditeur_id],
            ['nb_mess' => 0, 'etat_test' => 'Non commencé']
        );
    }

    return "Auditeurs ajoutés à test_admi avec succès !";
}

public function envoyerMessage($auditeurId)
{
    // Logique pour envoyer le message
    // Par exemple incrémenter nb_mess dans test_admi
    $test = TestAdmi::where('auditeur_id', $auditeurId)->first();
    if ($test) {
        $test->increment('nb_mess'); // ajoute 1 au compteur
    }

    return back()->with('success', 'Message envoyé !');
}





}

