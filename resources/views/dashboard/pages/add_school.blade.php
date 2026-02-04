@extends('dashboard.layouts.dashboard')

@section('title', 'Gestion des Écoles')

@section('content')

<div class="p-6">

    <!-- BOUTON AJOUTER -->
    <div class="flex justify-end mb-4">
        <button
            id="openModal"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl shadow">
            + Ajouter une École
        </button>
    </div>

    <!-- TABLEAU DYNAMIQUE -->
    <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h2 class="font-bold text-xl">Liste des Écoles</h2>
        </div>

        <div class="p-4 overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-3">#</th>
                        <th class="p-3">École</th>
                        <th class="p-3">Abrév.</th>
                        <th class="p-3">Lien</th>
                        <th class="p-3">Adresse</th>
                        <th class="p-3">Téléphone</th>
                        <th class="p-3">Filières</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ecoles as $index => $ecole)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3">{{ $index + 1 }}</td>
                        <td class="p-3 font-semibold">{{ $ecole->nom }}</td>
                        <td class="p-3 text-blue-600 font-bold">{{ $ecole->abreviation }}</td>
                        <td class="p-3">
                            @if($ecole->lien_site)
                                <a href="{{ $ecole->lien_site }}" class="text-blue-500 underline" target="_blank">Voir</a>
                            @endif
                        </td>
                        <td class="p-3">{{ $ecole->adresse }}</td>
                        <td class="p-3">{{ $ecole->telephone }}</td>
                        <td class="p-3">
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                {{ $ecole->filieres->count() }} Filières
                            </span>
                        </td>
                        <td class="p-3 space-x-2">
                            <!-- Modifier -->
                            <button
                                class="bg-yellow-500 text-white px-3 py-1 rounded editEcoleBtn"
                                data-id="{{ $ecole->id }}"
                                data-nom="{{ $ecole->nom }}"
                                data-abreviation="{{ $ecole->abreviation }}"
                                data-telephone="{{ $ecole->telephone }}"
                                data-adresse="{{ $ecole->adresse }}"
                                data-lien="{{ $ecole->lien_site }}"
                                data-filieres='@json($ecole->filieres)'>
                                Modifier
                            </button>

                            <!-- Suppression -->
                            <form action="{{ route('dashboard.ecoles.destroy', $ecole->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL TAILWIND -->
<div id="modalEcole"
     class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">

    <div class="bg-white w-11/12 md:w-3/4 lg:w-1/2 rounded-2xl shadow-xl p-6 max-h-[90vh] overflow-y-auto">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-xl font-semibold" id="modalTitle">Créer une Nouvelle École</h5>
            <button id="closeModal" class="text-gray-500 text-2xl hover:text-black">&times;</button>
        </div>

        <!-- BODY -->
        <form id="ecoleForm" action="{{ route('dashboard.ecoles.store') }}" method="POST">
            @csrf

            <h5 class="font-semibold mb-3">Informations de l'École</h5>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="font-medium">Nom de l'École :</label>
                    <input type="text" name="nom" class="w-full mt-1 border rounded-lg p-2" placeholder="Ex : Institut Supérieur de Technologie" required>
                </div>

                <div>
                    <label class="font-medium">Abréviation :</label>
                    <input type="text" name="abreviation" class="w-full mt-1 border rounded-lg p-2" placeholder="Ex : IST" required>
                </div>

                <div>
                    <label class="font-medium">Téléphone :</label>
                    <input type="text" name="telephone" class="w-full mt-1 border rounded-lg p-2" placeholder="0707070707">
                </div>

                <div>
                    <label class="font-medium">Lien du site :</label>
                    <input type="url" name="lien_site" class="w-full mt-1 border rounded-lg p-2" placeholder="https://www.exemple.ci">
                </div>
            </div>

            <div class="mb-5">
                <label class="font-medium">Adresse :</label>
                <input type="text" name="adresse" class="w-full mt-1 border rounded-lg p-2" placeholder="Ex : Cocody Angré">
            </div>

            <hr class="my-4">

            <h5 class="font-semibold mb-3">Filières</h5>
            <div id="filiereContainer"></div>

            <button type="button" id="addFiliere" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg mb-3">
                + Ajouter une Filière
            </button>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

<!-- SCRIPT JS -->
<script>
const modal = document.getElementById('modalEcole');
const form = document.getElementById('ecoleForm');
const openModalBtn = document.getElementById('openModal');
const closeModalBtn = document.getElementById('closeModal');
const filiereContainer = document.getElementById('filiereContainer');

// Fonction pour créer une ligne de filière
function createFiliereRow(nom = '', abreviation = '', description = '') {
    let row = `
    <div class="p-4 bg-gray-50 border rounded-xl mb-3 filiereItem">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div><label class="font-medium">Nom :</label><input type="text" name="nom_filiere[]" class="w-full mt-1 border rounded-lg p-2" value="${nom}" required></div>
            <div><label class="font-medium">Abréviation :</label><input type="text" name="abreviation_filiere[]" class="w-full mt-1 border rounded-lg p-2" value="${abreviation}" required></div>
            <div><label class="font-medium">Description :</label><input type="text" name="description[]" class="w-full mt-1 border rounded-lg p-2" value="${description}"></div>
        </div>
        <div class="mt-3 text-right"><button type="button" class="removeFiliere bg-red-600 text-white px-4 py-2 rounded-lg">Supprimer</button></div>
    </div>`;
    filiereContainer.insertAdjacentHTML('beforeend', row);
}

// Ajouter filière
document.getElementById('addFiliere').addEventListener('click', () => createFiliereRow());

// Supprimer filière
function attachDeleteEvent() {
    document.querySelectorAll('.removeFiliere').forEach(btn => {
        btn.onclick = () => btn.closest('.filiereItem').remove();
    });
}
attachDeleteEvent();

// Ouvrir modal création
openModalBtn.onclick = () => {
    form.reset();
    form.action = "{{ route('dashboard.ecoles.store') }}";
    form.querySelector('input[name="_method"]')?.remove();
    document.getElementById('modalTitle').innerText = "Créer une Nouvelle École";
    filiereContainer.innerHTML = '';
    createFiliereRow();
    attachDeleteEvent();
    modal.classList.remove('hidden');
};

// Ouvrir modal édition
document.querySelectorAll('.editEcoleBtn').forEach(btn => {
    btn.onclick = () => {
        const id = btn.dataset.id;
        const nom = btn.dataset.nom;
        const abreviation = btn.dataset.abreviation;
        const telephone = btn.dataset.telephone;
        const adresse = btn.dataset.adresse;
        const lien = btn.dataset.lien;
        const filieres = JSON.parse(btn.dataset.filieres);

        form.action = `/Dashboard/add_school/${id}`;

        // Ajouter _method PUT
        if (!form.querySelector('input[name="_method"]')) {
            let methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            methodInput.value = 'PUT';
            form.appendChild(methodInput);
        }

        // Remplir formulaire
        form.querySelector('input[name="nom"]').value = nom;
        form.querySelector('input[name="abreviation"]').value = abreviation;
        form.querySelector('input[name="telephone"]').value = telephone;
        form.querySelector('input[name="adresse"]').value = adresse;
        form.querySelector('input[name="lien_site"]').value = lien;

        // Remplir filières
        filiereContainer.innerHTML = '';
        filieres.forEach(f => createFiliereRow(f.nom, f.abreviation, f.description));

        attachDeleteEvent();
        document.getElementById('modalTitle').innerText = "Modifier l'École";
        modal.classList.remove('hidden');
    };
});

// Fermer modal
closeModalBtn.onclick = () => modal.classList.add('hidden');
window.onclick = e => { if(e.target === modal) modal.classList.add('hidden'); };
</script>

@endsection
