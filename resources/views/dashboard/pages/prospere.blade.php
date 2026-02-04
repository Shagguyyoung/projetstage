@extends('dashboard.layouts.dashboard')

@section('title', 'Prospere')

@section('content')


<div x-data="{
    selectedFiliere: '',
    searchTerm: '',
}" class="bg-white shadow rounded-lg overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Prospere</h2>
    </div>

    <!-- Barre de recherche -->
    <div class="px-6 py-4 border-b flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
        <input
            type="text"
            x-model="searchTerm"
            placeholder="Rechercher un auditeur..."
            class="w-full md:w-1/3 border border-white rounded-lg px-3 py-2 focus:ring  "
        >

        <div class="flex space-x-2">
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
        </div>
    </div>

    <!-- Filtres Filières -->
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

    <!-- Tableau -->
    <!-- Tableau -->
<div class="overflow-x-auto width istebos">
    <table class="min-w-full divide-y divide-gray-200">

        <!-- En-têtes -->
        <thead class="bg-gray-50">
            <tr>
                <template x-for="title in ['ID','Centre','Pays','Nom','Prénom','Tel','Email' , 'orientation']">
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600 uppercase tracking-wider min-w-[120px]"
                        x-text="title"></th>
                </template>
            </tr>
        </thead>

      <tbody class="bg-white divide-y divide-gray-200">
@foreach ($auditeurs as $auditeur)
    <tr class="hover:bg-gray-50">
        <td class="px-6 py-3 text-sm">{{ $auditeur->Matricule }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->centre }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->nom }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->prenoms }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->pays_residence }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->contact_tel }}</td>
        <td class="px-6 py-3 text-sm">{{ $auditeur->mail }}</td>

<td class="px-6 py-3 text-sm">
    <form action="{{ route('auditeur.reinscrire', $auditeur->id_auditeur) }}" method="POST">
        @csrf

        <select name="classe_id" class="border-gray-300 rounded px-2 py-1 text-sm w-full" required>
            @php
                $classesEcole = $ecoleChoisie
                    ? $classes->filter(fn($classe) => $classe->filiere->ecole_id === $ecoleChoisie->id)
                    : $classes;
            @endphp

            @foreach ($classesEcole as $classe)
                <option value="{{ $classe->id }}">
                    {{ $classe->nom }}
                </option>
            @endforeach
        </select>

        <button type="submit"
                class="bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700 mt-2 text-sm transition-all w-full">
            Réinscrire
        </button>
    </form>
</td>


    </tr>
@endforeach
</tbody>



    </table>
</div>





    <!-- Pagination -->
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
</div>

@endsection
