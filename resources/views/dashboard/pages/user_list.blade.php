@extends('dashboard.layouts.dashboard')

@section('title', 'Utilisateurs')

@section('content')


<div class="bg-white shadow rounded-lg overflow-hidden">
    <!-- Header avec boutons -->
    <div class="px-6 py-4 border-b flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0">
        <h2 class="text-xl font-semibold text-gray-800">Liste des Utilisateurs</h2>
        <div class="flex space-x-2">
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1 transition-colors">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1 transition-colors">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
            <!-- <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center space-x-1 transition-colors">
                <i class="fas fa-plus"></i><span>Ajouter</span>
            </button> -->
        </div>
    </div>

    <!-- Barre de recherche -->
    <div class="px-6 py-4 border-b">
        <input
            type="text"
            placeholder="Rechercher un utilisateur..."
            class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-400 focus:border-blue-500"
        >
    </div>

    <!-- Tableau -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prénom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Téléphone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Koné</td>
                    <td class="px-6 py-4 whitespace-nowrap">Brahima</td>
                    <td class="px-6 py-4 whitespace-nowrap">kone@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">0707070707</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">Actif</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition-colors"><i class="fas fa-edit"></i></button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Traoré</td>
                    <td class="px-6 py-4 whitespace-nowrap">Aminata</td>
                    <td class="px-6 py-4 whitespace-nowrap">aminata@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">0589898989</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-700">Inactif</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition-colors"><i class="fas fa-edit"></i></button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
