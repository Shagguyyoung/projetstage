@extends('dashboard.layouts.dashboard')

@section('title', 'Ajouter fichier')

@section('content')

<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 space-y-6">

    <h2 class="text-2xl font-bold text-[rgb(179,28,121)] mb-4">Ajouter un Fichier</h2>

    <!-- Promo -->
    <div>
        <label class="block text-sm font-medium mb-1">Promotion</label>
        <select class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300">
            <option value="" selected disabled>Choisir une promotion</option>
            <option>Promo 1</option>
            <option>Promo 2</option>
            <option>Promo 3</option>
        </select>
    </div>

    <!-- Espace -->
    <div>
        <label class="block text-sm font-medium mb-1">Espace</label>
        <select class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300">
            <option value="" selected disabled>Choisir un espace</option>
            <option>Accueil</option>
            <option>Dashboard</option>
            <option>Public</option>
        </select>
    </div>

    <!-- Texte -->
   <div>
        <label class="block text-sm font-medium mb-1">Texte</label>
        <textarea rows="4" class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300" placeholder="Votre message..."></textarea>
    </div>

    <!-- Message -->
    <div>
        <label class="block text-sm font-medium mb-1">Message de notification</label>
        <textarea rows="4" class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300" placeholder="Votre message..."></textarea>
    </div>

    <!-- Signature -->
    <div>
        <label class="block text-sm font-medium mb-1">Signature</label>
        <textarea rows="4" class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300" placeholder="Votre Sitgnature..."></textarea>
    </div>

    <!-- Dates en deux colonnes -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Date d'affichage</label>
            <input type="date" class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Date de suppression</label>
            <input type="date" class="w-full border rounded-lg p-2.5 focus:ring focus:ring-indigo-300">
        </div>
    </div>

    <!-- Fichier -->
    <div>
        <label class="block text-sm font-medium mb-1">Joindre un fichier</label>
        <input type="file" class="block w-full text-sm text-gray-700
        file:bg-[rgb(179,28,121)] file:text-white file:rounded-lg
        file:px-4 file:py-2 file:border-0 file:mr-4 hover:file:bg-[rgba(138, 44, 102, 1)]">
    </div>

    <!-- Bouton -->
    <div>
        <button class="w-full bg-[rgb(179,28,121)] hover:bg-[rgba(138, 44, 102, 1)] text-white font-semibold py-3 rounded-xl transition">
            Enregistrer
        </button>
    </div>

</div>

@endsection
