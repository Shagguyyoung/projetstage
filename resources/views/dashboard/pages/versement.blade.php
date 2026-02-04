@extends('dashboard.layouts.dashboard')

@section('title', 'Versement')

@section('content')
<div x-data="versementsPage()" class="bg-white shadow rounded-lg overflow-hidden">

    {{-- HEADER --}}
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Versement</h2>
    </div>

    {{-- BARRE RECHERCHE + EXPORT --}}
    <div class="px-6 py-4 border-b flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
        <input type="text"
               x-model="searchTerm"
               placeholder="Rechercher un auditeur..."
               class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring">

        <div class="flex space-x-2">
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
        </div>
    </div>

    {{-- FILTRES CLASSE / PROMOTION --}}
    <div x-data="{ open: true }" class="border-b px-6 py-4 bg-gray-50 rounded-md shadow-sm">

        <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
            <h3 class="text-lg font-semibold text-gray-700">Promotion / Classe</h3>
            <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="transition-transform duration-300"></i>
        </div>

        @php
            $classesEcole = $ecoleChoisie
                ? $classes->filter(fn($classe) => $classe->filiere->ecole_id === $ecoleChoisie->id)
                : $classes;

            $classesGrouped = $classesEcole->groupBy(fn($classe) => substr($classe->nom, -1));
        @endphp

        <div x-show="open" x-transition class="mt-4">
            @foreach ($classesGrouped as $promo => $promoClasses)

                <div class="mt-6 mb-2">
                    <h4 class="text-gray-600 font-semibold text-sm px-2 border-l-4 border-blue-500">
                        Promotion {{ $promo }}
                    </h4>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                    @foreach ($promoClasses as $classe)
                        @php $auditeursCount = $classe->auditeurs->count(); @endphp

                        <button @click="$root.selectedClasseId = '{{ $classe->id }}'"
                                :class="$root.selectedClasseId == '{{ $classe->id }}'
                                    ? 'border-blue-600 bg-blue-100 shadow-md'
                                    : 'border-gray-200 bg-white'"
                                class="flex items-center justify-between border rounded-lg py-3 px-3 hover:bg-blue-50 hover:shadow-sm transition-all duration-200 w-full">

                            <div class="flex items-center">
                                <i class="fas fa-folder-open text-yellow-500 mr-2 text-base"></i>
                                <span class="font-medium text-gray-700 text-sm">{{ $classe->nom }}</span>
                            </div>

                            <span class="bg-red-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                                {{ $auditeursCount }}
                            </span>

                        </button>
                    @endforeach
                </div>

            @endforeach
        </div>
    </div>

    {{-- TABLEAU FINANCIER --}}
    <div class="overflow-x-auto mt-6">

        <table class="min-w-full border border-gray-300 text-sm text-gray-700">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-6 py-3 border">ID</th>
                    <th class="px-6 py-3 border">Nom</th>
                    <th class="px-6 py-3 border">Prénoms</th>
                    <th class="px-6 py-3 border">Centre</th>
                    <th class="px-6 py-3 border">Contact</th>
                    <th class="px-6 py-3 border text-center">Montant Total</th>
                    <th class="px-6 py-3 border text-center bg-blue-50 font-semibold">Échéancier</th>
                    <th class="px-6 py-3 border">Engagement</th>
                    <th class="px-6 py-3 border">Suivi</th>
                    <th class="px-6 py-3 border text-center bg-green-50 font-semibold">État</th>
                </tr>
            </thead>

            <tbody>
            @foreach($echeanciers as $echeancier)
                <tr x-show="filterRow('{{ strtolower($echeancier->auditeur->nom) }}',
                                     '{{ strtolower($echeancier->auditeur->prenoms) }}',
                                     '{{ strtolower($echeancier->auditeur->Matricule) }}',
                                     [{{ $echeancier->auditeur->classes->pluck('id')->implode(',') }}])">

                    <td class="px-6 py-4 border">{{ $echeancier->auditeur->Matricule }}</td>
                    <td class="px-6 py-4 border">{{ $echeancier->auditeur->nom }}</td>
                    <td class="px-6 py-4 border">{{ $echeancier->auditeur->prenoms }}</td>
                    <td class="px-6 py-4 border">{{ $echeancier->auditeur->centre }}</td>

                    <td class="px-6 py-4 border">
                        {{ $echeancier->auditeur->contact_tel }}<br>
                        {{ $echeancier->auditeur->mail }}
                    </td>

                    <td class="px-6 py-4 border text-center">
                        {{ number_format($echeancier->montant_total, 0, ',', ' ') }} FCFA
                    </td>

                    {{-- ECHEANCIER --}}
                    <td class="px-6 py-4 border text-center">
                        <button @click="openModal({{ $echeancier->auditeur->id_auditeur }},
                                                  '{{ $echeancier->auditeur->nom }}',
                                                  '{{ $echeancier->auditeur->prenoms }}',
                                                  {{ json_encode($echeancier->echeances) }},
                                                  '{{ $echeancier->montant_total }}')"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">

                            {{ $echeancier->echeances && count($echeancier->echeances) > 0 ? 'Voir' : 'Créer' }}
                            Échéancier
                        </button>
                    </td>

                    {{-- ENGAGEMENT --}}
                    <td class="px-6 py-4 border text-center">
                        @if($echeancier->Engagement == 0)
                            <span class="text-red-600 font-semibold">Non validé</span>
                        @elseif($echeancier->Engagement == 1)
                            <span class="text-green-600 font-semibold">Validé</span>
                        @endif
                    </td>

                    {{-- RETARD / SUIVI --}}
                    <td class="px-6 py-4 border text-center">
                        @if($echeancier->statut == 0)
                            <span class="text-red-600 font-semibold">Retard</span>
                        @elseif($echeancier->statut == 1)
                            <span class="text-green-600 font-semibold">À jour</span>
                        @endif
                    </td>

                    {{-- ÉTAT --}}
                    <td class="px-6 py-4 border text-center">
                        <form action="{{ route('echeancier.updateEtat') }}" method="POST">
                            @csrf

                            <input type="hidden" name="echeancier_id" value="{{ $echeancier->id }}">

                            <select name="Etat" onchange="this.form.submit()" class="border px-2 py-1 rounded text-sm" required>
                                <option value="0" {{ $echeancier->Etat == 0 ? 'selected' : '' }}>Inscrit</option>
                                <option value="1" {{ $echeancier->Etat == 1 ? 'selected' : '' }}>Abandon</option>
                                <option value="2" {{ $echeancier->Etat == 2 ? 'selected' : '' }}>Report</option>
                                <option value="3" {{ $echeancier->Etat == 3 ? 'selected' : '' }}>Suspension</option>
                            </select>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{-- PAGINATION --}}
    <div class="px-6 py-3 bg-gray-50 flex justify-between items-center">
        <span class="text-sm text-gray-600">Page 1 sur 10</span>
        <div class="flex space-x-2">
            <button class="px-3 py-1 border rounded hover:bg-gray-200">«</button>
            <button class="px-3 py-1 border rounded bg-blue-600 text-white">1</button>
            <button class="px-3 py-1 border rounded hover:bg-gray-200">2</button>
            <button class="px-3 py-1 border rounded hover:bg-gray-200">3</button>
            <button class="px-3 py-1 border rounded hover:bg-gray-200">»</button>
        </div>
    </div>



    {{-- MODAL ECHEANCIER --}}
{{-- MODAL ECHEANCIER --}}
<div x-show="showModal" x-transition.opacity
     class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
     style="display: none;">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96 relative">
        <button @click="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>

        <h2 class="text-lg font-bold mb-4">Créer Échéancier</h2>

        <form action="{{ route('echeances.store') }}" method="POST">
            @csrf
            <input type="hidden" name="echeancier_id" :value="selected.id">

            <table class="min-w-full border border-gray-300 text-sm mb-4">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">Date</th>
                        <th class="border px-4 py-2">Montant</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(ec, index) in echeances" :key="index">
                        <tr>
                            <td class="border px-4 py-2">
                                <input type="date" :name="'dates[]'" x-model="ec.date_echeance" class="border px-2 py-1 rounded w-full" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="number" :name="'montants[]'" x-model="ec.montant_attendu" class="border px-2 py-1 rounded w-full" required>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <div class="mb-4 flex space-x-2">
                <input type="date" x-model="newDate" class="border px-3 py-1 rounded w-1/2">
                <input type="number" x-model="newMontant" class="border px-3 py-1 rounded w-1/2" placeholder="Montant">
                <button type="button" @click.prevent="addEcheance" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                    Ajouter
                </button>
            </div>

            <div class="flex justify-end space-x-2">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Valider
                </button>
                <button type="button" @click="closeModal" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Annuler
                </button>
            </div>
        </form>
    </div>
</div>






</div>



<script>
function versementsPage() {
    return {
        /* -------------------- FILTRES -------------------- */
        selectedClasseId: null,
        searchTerm: '',

        filterRow(nom, prenoms, matricule, classes) {
            let s = this.searchTerm.toLowerCase();
            let searchOK = !s || nom.toLowerCase().includes(s) || prenoms.toLowerCase().includes(s) || matricule.includes(s);
            let classOK = !this.selectedClasseId || classes.includes(Number(this.selectedClasseId));
            return searchOK && classOK;
        },

        /* -------------------- MODAL ECHEANCIER -------------------- */
        showModal: false,
        selected: { id: null, nom: '', prenoms: '', total: 0 },
        echeances: [],
        newDate: '',
        newMontant: '',

        openModal(id = null, nom = '', prenoms = '', echeances = [], total = 0) {
            this.selected.id = id;
            this.selected.nom = nom;
            this.selected.prenoms = prenoms;
            this.selected.total = total;
            this.echeances = JSON.parse(JSON.stringify(echeances));
            this.showModal = true;
        },

        closeModal() {
            this.showModal = false;
            this.newDate = '';
            this.newMontant = '';
            this.echeances = [];
        },

        /* -------------------- GESTION ECHEANCES -------------------- */
        get calculTotal() {
            return this.echeances.reduce((s, e) => s + Number(e.montant_attendu), 0);
        },

        addEcheance() {
            if (!this.newDate || !this.newMontant) {
                alert("Veuillez remplir la date et le montant.");
                return;
            }
            this.echeances.push({
                date_echeance: this.newDate,
                montant_attendu: Number(this.newMontant)
            });
            this.newDate = '';
            this.newMontant = '';
        }

        /* -------------------- ENREGISTREMENT via FORMULAIRE CLASSIQUE -------------------- */
        // Le formulaire dans le modal s'occupe de tout côté serveur
    }
}
</script>



@endsection
