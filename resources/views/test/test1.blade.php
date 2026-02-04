@extends('dashboard.layouts.dashboard')

@section('title', 'Ajouter un Auditeur')

@section('content')
<div class="p-6">

    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Ajouter un Auditeur</h2>

    <form action="{{ route('test1.ajout') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        {{-- Champs principaux --}}
        @php
            $fields = [
                ['label'=>'Nom','name'=>'nom','type'=>'text'],
                ['label'=>'Prénoms','name'=>'prenoms','type'=>'text'],
                ['label'=>'Pays de résidence','name'=>'pays_residence','type'=>'text'],
                ['label'=>'Indicatif pays','name'=>'indicatif_pays','type'=>'text'],
                ['label'=>'Email','name'=>'mail','type'=>'email'],
                ['label'=>'Contact téléphone','name'=>'contact_tel','type'=>'text'],
                ['label'=>'Numéro WhatsApp','name'=>'numero_whatsapp','type'=>'text'],
                ['label'=>'Mot de passe','name'=>'mot_de_passe','type'=>'password'],
                ['label'=>'Centre','name'=>'centre','type'=>'text'],
                ['label'=>'Ville de naissance','name'=>'ville_naissance','type'=>'text'],
                ['label'=>'Pays de naissance','name'=>'pays_naissance','type'=>'text'],
                ['label'=>'Ville de résidence','name'=>'ville_residence','type'=>'text'],
            ];
        @endphp

        @foreach($fields as $field)
            <div>
                <label for="{{ $field['name'] }}" class="block text-gray-700 font-medium mb-1">{{ $field['label'] }}</label>
                <input
                    type="{{ $field['type'] }}"
                    name="{{ $field['name'] }}"
                    id="{{ $field['name'] }}"
                    value="{{ old($field['name']) ?? '' }}"
                    class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
            </div>
        @endforeach

        {{-- Uploads --}}
        @foreach(['extrait', 'photo', 'carte_nationalite'] as $file)
            <div>
                <label for="{{ $file }}" class="block text-gray-700 font-medium mb-1">{{ ucfirst(str_replace('_',' ',$file)) }} (image)</label>
                <input type="file" name="{{ $file }}" id="{{ $file }}" accept="image/*" required
                       class="border border-gray-300 rounded-lg w-full p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
        @endforeach

        {{-- Genre de dossier et genre --}}
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="genre_dossier" class="block text-gray-700 font-medium mb-1">Genre de dossier</label>
                <select name="genre_dossier" id="genre_dossier" class="border border-gray-300 rounded-lg w-full p-3" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="VAP">VAP</option>
                    <option value="Direct">Direct</option>
                </select>
            </div>
            <div>
                <label for="genre" class="block text-gray-700 font-medium mb-1">Genre</label>
                <select name="genre" id="genre" class="border border-gray-300 rounded-lg w-full p-3" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
        </div>

        {{-- École, Filière, Classe --}}
        <div class="grid grid-cols-3 gap-4">
            <div>
                <label for="ecole_id" class="block text-gray-700 font-medium mb-1">École</label>
                <select name="ecole_id" id="ecole_id" class="border border-gray-300 rounded-lg w-full p-3" required>
                    <option value="">-- Sélectionner une école --</option>
                    @foreach($ecoles as $ecole)
                        <option value="{{ $ecole->id }}">{{ $ecole->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="filiere_id" class="block text-gray-700 font-medium mb-1">Filière</label>
                <select name="filiere_id" id="filiere_id" class="border border-gray-300 rounded-lg w-full p-3" required>
                    <option value="">-- Sélectionner une filière --</option>
                </select>
            </div>

            <div>
                <label for="classe_id" class="block text-gray-700 font-medium mb-1">Classe</label>
                <select name="classe_id" id="classe_id" class="border border-gray-300 rounded-lg w-full p-3" required>
                    <option value="">-- Sélectionner une classe --</option>
                </select>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                Enregistrer
            </button>
        </div>
    </form>
</div>

<script>
    const ecoles = @json($ecoles);

    const ecoleSelect = document.getElementById('ecole_id');
    const filiereSelect = document.getElementById('filiere_id');
    const classeSelect = document.getElementById('classe_id');

    ecoleSelect.addEventListener('change', function() {
        filiereSelect.innerHTML = '<option value="">-- Sélectionner une filière --</option>';
        classeSelect.innerHTML = '<option value="">-- Sélectionner une classe --</option>';

        const ecole = ecoles.find(e => e.id == this.value);
        if(ecole) {
            ecole.filieres.forEach(f => {
                const opt = document.createElement('option');
                opt.value = f.id;
                opt.textContent = f.nom;
                filiereSelect.appendChild(opt);
            });
        }
    });

    filiereSelect.addEventListener('change', function() {
        classeSelect.innerHTML = '<option value="">-- Sélectionner une classe --</option>';
        const ecole = ecoles.find(e => e.id == ecoleSelect.value);
        if(!ecole) return;
        const filiere = ecole.filieres.find(f => f.id == this.value);
        if(filiere) {
            filiere.classes.forEach(c => {
                const opt = document.createElement('option');
                opt.value = c.id;
                opt.textContent = c.nom;
                classeSelect.appendChild(opt);
            });
        }
    });
</script>
@endsection
