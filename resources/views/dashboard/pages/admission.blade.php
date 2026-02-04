@extends('dashboard.layouts.dashboard')

@section('title', 'Admission')

@section('content')

@php
    // Sécurisation des variables
    $classes = $classes ?? collect();
    $ecoleChoisie = $ecoleChoisie ?? null;

    // Filtrage selon l'école
    $classesEcole = $ecoleChoisie
        ? $classes->filter(fn($classe) => optional($classe->filiere)->ecole_id === $ecoleChoisie->id)
        : $classes;

    // Groupement par promotion
    $classesGrouped = $classesEcole->groupBy(fn($classe) => substr($classe->nom ?? '', -1));
@endphp

<div x-data="admissionApp()" class="bg-white shadow rounded-lg overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Admission</h2>
    </div>

    <!-- Barre de recherche -->
    <div class="px-6 py-4 border-b flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
        <input type="text" x-model="searchTerm" placeholder="Rechercher un auditeur..."
            class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring">

        <div class="flex space-x-2">
            <button @click="exportExcel()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button @click="exportPDF()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
        </div>
    </div>

    <!-- Filtres Classes -->
    <div x-show="open" x-transition class="mt-4">

        @foreach ($classesGrouped as $promo => $promoClasses)

            <div class="mt-6 mb-2">
                <h4 class="text-gray-600 font-semibold text-sm px-2 border-l-4 border-blue-500">
                    Promotion {{ $promo }}
                </h4>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">

                @foreach ($promoClasses as $classe)
                    @php $auditeursCount = $classe->auditeurs()->count(); @endphp

                    <button
                        @click="selectClasse('{{ $classe->id }}')"
                        class="flex items-center justify-between bg-white border border-gray-200
                               rounded-lg py-3 px-3 hover:bg-blue-50 hover:shadow-sm transition-all
                               duration-200 w-full"
                        :class="selectedFiliereId === '{{ $classe->id }}'
                            ? 'border-blue-600 bg-blue-100 shadow-md' : ''">

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

    <!-- Tableau -->
    <div class="overflow-x-auto w-full mt-4">
        <table class="min-w-full border border-gray-300 text-sm text-gray-700">

            <thead class="bg-gray-100">
                <tr>
                    <th rowspan="2" class="px-3 py-2 border">Matricule</th>
                    <th rowspan="2" class="px-3 py-2 border">Centre</th>
                    <th rowspan="2" class="px-3 py-2 border">Nom</th>
                    <th rowspan="2" class="px-3 py-2 border">Prénom</th>
                    <th rowspan="2" class="px-3 py-2 border">Tel</th>
                    <th rowspan="2" class="px-3 py-2 border">Email</th>
                    <th rowspan="2" class="px-3 py-2 border">Accès</th>
                    <th rowspan="2" class="px-3 py-2 border">Date</th>

                    <th colspan="3" class="px-3 py-2 border text-center bg-blue-50 font-semibold">
                        Test d’admission
                    </th>

                    <th colspan="2" class="px-3 py-2 border text-center bg-green-50 font-semibold">
                        Inscriptions
                    </th>
                </tr>

                <tr class="bg-gray-50">
                    <th class="px-3 py-2 border">Pdt Jury</th>
                    <th class="px-3 py-2 border">Correcteur 1</th>
                    <th class="px-3 py-2 border">Décision Finale</th>
                    <th class="px-3 py-2 border">Décision</th>
                    <th class="px-3 py-2 border">Centre Déf.</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($admissions as $admission)
                    @php $auditeur = $admission->auditeur; @endphp

                    <tr class="hover:bg-gray-50">

                        <td class="px-3 py-2 border">{{ $auditeur->Matricule }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->centre ?? 'N/A' }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->nom }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->prenoms }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->contact_tel ?? 'N/A' }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->mail ?? 'N/A' }}</td>
                        <td class="px-3 py-2 border">{{ $auditeur->genre_dossier ?? 'N/A' }}</td>
                        <td class="px-3 py-2 border">{{ $admission->date }}</td>

                        <td class="px-3 py-2 border">---</td>
                        <td class="px-3 py-2 border">---</td>

                        @php
                            $decisions = [
                                0 => 'Aucun',
                                1 => 'Favorable',
                                2 => 'Abandon',
                                3 => 'Repêchage',
                                4 => 'Défavorable'
                            ];
                        @endphp

                        <td class="px-3 py-2 border">
                            {{ $decisions[$admission->decision] ?? 'N/A' }}
                        </td>

                        <!-- Decision -->
                        <td class="px-3 py-2 border">
                            <select class="decision-select border rounded px-2 py-1 text-xs bg-white"
                                data-auditeur="{{ $auditeur->id_auditeur }}">
                                @foreach ($decisions as $key => $label)
                                    <option value="{{ $key }}" {{ $admission->decision == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </td>

                        <!-- Centre -->
                        <td class="px-3 py-2 border">
                            <select class="centre-select border rounded px-2 py-1 text-xs bg-white"
                                data-auditeur="{{ $auditeur->id_auditeur }}">
                                <option value="1" {{ $admission->centre == 1 ? 'selected' : '' }}>Abobo</option>
                                <option value="2" {{ $admission->centre == 2 ? 'selected' : '' }}>Cocody</option>
                                <option value="3" {{ $admission->centre == 3 ? 'selected' : '' }}>Yopougon</option>
                            </select>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

<!-- AlpineJS Script -->
<script>
function admissionApp() {
    return {
        searchTerm: '',
        selectedFiliereId: '',
        admissions: @json($admissions),

        selectClasse(id) {
            this.selectedFiliereId = id;
        },

        exportExcel() {},
        exportPDF() {}
    }
}
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {

    // Changement decision
    $('.decision-select').on('change', function() {
        $.post("{{ route('admission.updateDecision') }}", {
            _token: "{{ csrf_token() }}",
            auditeur_id: $(this).data('auditeur'),
            decision: $(this).val()
        });
    });

    // Changement centre
    $('.centre-select').on('change', function() {
        $.post("{{ route('admission.updateCentre') }}", {
            _token: "{{ csrf_token() }}",
            auditeur_id: $(this).data('auditeur'),
            centre: $(this).val()
        });
    });

});
</script>

@endsection
