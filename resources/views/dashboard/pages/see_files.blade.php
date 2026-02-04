@extends('dashboard.layouts.dashboard')

@section('title', 'Fichiers')

@section('content')

 <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Liste des fichers</h2>
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
    <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Promo</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Espace</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Description</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Fichier</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Action</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">

            <tr class="hover:bg-gray-50">
                <td class="px-6 py-3">Promo 1</td>
                <td class="px-6 py-3">Dashboard</td>
                <td class="px-6 py-3">Message important aux étudiants…</td>
                <td class="px-6 py-3">
                    <a href="#" class="text-blue-600 hover:underline">document.pdf</a>
                </td>
                <td class="px-6 py-3">
                    <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>

            <tr class="hover:bg-gray-50">
                <td class="px-6 py-3">Promo 3</td>
                <td class="px-6 py-3">Accueil</td>
                <td class="px-6 py-3">Annonce concernant l’emploi du temps…</td>
                <td class="px-6 py-3">
                    <a href="#" class="text-blue-600 hover:underline">emploi.pdf</a>
                </td>
                <td class="px-6 py-3">
                    <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>


@endsection
