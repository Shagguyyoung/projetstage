@extends('dashboard.layouts.dashboard')

@section('title', 'Gestion des Promotions')

@section('content')
<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Promotions</h2>
        <button id="openModal" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow">
            + Ajouter une Promotion
        </button>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- LISTE DES PROMOTIONS -->
    <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <div class="p-4">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">#</th>
                        <th class="p-3">École</th>
                        <th class="p-3">Nom</th>
                        <th class="p-3">Type rentrée</th>
                        <th class="p-3">Num Promo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($promotions as $index => $promo)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3">{{ $promo->ecole->nom }}</td>
                            <td class="p-3">{{ $promo->nom }}</td>
                            <td class="p-3">{{ ucfirst($promo->type_rentree) }}</td>
                            <td class="p-3">{{ $promo->num_promo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL TAILWIND -->
<div id="modalPromo" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white w-11/12 md:w-1/2 rounded-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-xl font-semibold">Ajouter une Nouvelle Promotion</h5>
            <button id="closeModal" class="text-gray-500 text-2xl hover:text-black">&times;</button>
        </div>

        <!-- BODY -->
        <form action="{{ route('dashboard.promotions.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="font-medium">École :</label>
                <select name="ecole_id" class="w-full mt-2 border rounded-lg p-2" required>
                    <option value="">-- Sélectionner une école --</option>
                    @foreach($ecoles as $ecole)
                        <option value="{{ $ecole->id }}">{{ $ecole->nom }} ({{ $ecole->abreviation }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="font-medium">Nom de la promotion :</label>
                <input type="text" name="nom" class="w-full mt-2 border rounded-lg p-2" placeholder="Ex : 2025/2026" required>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="font-medium">Année début :</label>
                    <input type="number" name="annee_debut" class="w-full mt-2 border rounded-lg p-2" placeholder="2025" required>
                </div>
                <div>
                    <label class="font-medium">Année fin :</label>
                    <input type="number" name="annee_fin" class="w-full mt-2 border rounded-lg p-2" placeholder="2026" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="font-medium">Type de rentrée :</label>
                <select name="type_rentree" class="w-full mt-2 border rounded-lg p-2" required>
                    <option value="normale">Normale</option>
                    <option value="decalee">Décalée</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                    Ajouter la promotion
                </button>
            </div>
        </form>
    </div>
</div>

<!-- SCRIPT JS -->
<script>
    const modal = document.getElementById('modalPromo');
    document.getElementById('openModal').onclick = () => modal.classList.remove('hidden');
    document.getElementById('closeModal').onclick = () => modal.classList.add('hidden');

    // Fermeture si clic en dehors
    window.onclick = function(e) {
        if(e.target === modal) modal.classList.add('hidden');
    }
</script>
@endsection
