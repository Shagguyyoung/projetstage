@extends('dashboard.layouts.dashboard')

@section('title', 'Recrutement')

@section('content')

<div x-data="recrutementApp()" class="bg-white shadow rounded-lg overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Recrutement</h2>
    </div>

    <!-- Barre de recherche et export -->
    <div class="px-6 py-4 border-b flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
        <input type="text" x-model="searchTerm" placeholder="Rechercher un auditeur..."
               class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring" />

        <div class="flex space-x-2">
            <button @click="exportExcel()"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button @click="exportPDF()"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
        </div>
    </div>

        <!-- Filtres Promotion / Classe -->
        <div x-data="{ open: true, selectedFiliereId: null }" class="border-b px-6 py-4 bg-gray-50 rounded-md shadow-sm">
        <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
            <h3 class="text-lg font-semibold text-gray-700">Promotion / Classe</h3>
            <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="transition-transform duration-300"></i>
        </div>

        <div x-show="open" x-transition class="mt-4">
            @php
                $classesEcole = $classes->filter(fn($classe) => $classe->filiere->ecole_id === $ecoleChoisie?->id);
                $classesGrouped = $classesEcole->groupBy(fn($classe) => substr($classe->nom, -1));
            @endphp

            @foreach ($classesGrouped as $promo => $promoClasses)
                <div class="mt-6 mb-2">
                    <h4 class="text-gray-600 font-semibold text-sm px-2 border-l-4 border-blue-500">
                        Promotion {{ $promo }}
                    </h4>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                    @foreach ($promoClasses as $classe)
                        @php
                            $auditeursCount = $classe->auditeurs()->count();
                        @endphp
                        <button @click="selectClasse('{{ $classe->id }}', '{{ $classe->nom }}')"
                                class="flex items-center justify-between bg-white border border-gray-200 rounded-lg py-3 px-3
                                    hover:bg-blue-50 hover:shadow-sm transition-all duration-200 w-full"
                                :class="selectedFiliereId === '{{ $classe->id }}' ? 'border-blue-600 bg-blue-100 shadow-md' : ''">
                            <div class="flex items-center">
                                <i class="fas fa-folder-open text-yellow-500 mr-2 text-base"></i>
                                <span class="font-medium text-gray-700 text-sm">{{ $classe->nom }}</span>
                            </div>
                            <span class="bg-red-500 text-white text-xs font-semibold px-2 py-0.5 rounded">{{ $auditeursCount }}</span>
                        </button>
                    @endforeach
                </div>
            @endforeach
        </div>
        </div>


<!-- Table Auditeurs -->
<div class="overflow-x-auto w-full mt-6">
    <table class="min-w-full divide-y divide-gray-200 border">
        <thead class="bg-gray-50">
            <tr>
                @foreach (['Date','Matricule','Mot de passe','Centre','Nom','Prénoms','Pays','Tel','Email','Statut','Recu','Refus','Dossier','Prospere','Supprimer'] as $title)
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ $title }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($auditeurs as $auditeur)
                <tr class="hover:bg-gray-50 cursor-pointer">
                    <td class="px-6 py-4">{{ $auditeur->created_at ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-blue-800 font-bold hover:underline" @click="openModal(@js($auditeur))">
                        {{ $auditeur->Matricule }}
                    </td>
                    <td class="px-6 py-4">{{ $auditeur->mot_de_passe ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->centre ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->nom ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->prenoms ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->pays_residence ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->contact_tel ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $auditeur->mail ?? 'N/A' }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                            {{ $auditeur->statut ?? 'Nouveau' }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @php $recu = optional($auditeur->recrutement)->recu; @endphp
                        <form action="{{ route('recrutement.update', ['ecole' => $ecoleChoisie?->id, 'auditeur' => $auditeur->id_auditeur]) }}" method="POST">
                            @csrf @method('PUT')
                            <input type="hidden" name="auditeur_id" value="{{ $auditeur->id_auditeur }}">
                            <input type="hidden" name="recu" value="{{ $recu ? 0 : 1 }}">
                            <button type="submit" class="{{ $recu ? 'bg-green-500 text-white hover:bg-green-600' : 'bg-gray-300 text-gray-700' }} px-3 py-1 rounded">
                                {{ $recu ? 'Reçu' : 'Pas de reçu' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        @php $refus = optional($auditeur->recrutement)->refus; @endphp
                        <form action="{{ route('recrutement.update', ['ecole' => $ecoleChoisie?->id, 'auditeur' => $auditeur->id_auditeur]) }}" method="POST">
                            @csrf @method('PUT')
                            <input type="hidden" name="refus" value="1">
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 {{ $refus ? 'opacity-70 cursor-not-allowed' : '' }}" {{ $refus ? 'disabled' : '' }}>
                                {{ $refus ? 'Refusé' : 'Refus' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('recrutement.update', ['ecole' => $ecoleChoisie?->id, 'auditeur' => $auditeur->id_auditeur]) }}" method="POST">
                            @csrf @method('PUT')
                            <select name="dossier" class="border border-gray-300 rounded px-2 py-1" onchange="this.form.submit()">
                                <option value="">Sélectionner</option>
                                <option value="1" {{ optional($auditeur->recrutement)->dossier == 1 ? 'selected' : '' }}>Dossier Incomplet</option>
                                <option value="2" {{ optional($auditeur->recrutement)->dossier == 2 ? 'selected' : '' }}>Dossier Rempli</option>
                                <option value="3" {{ optional($auditeur->recrutement)->dossier == 3 ? 'selected' : '' }}>Dossier Forcé</option>
                                <option value="4" {{ optional($auditeur->recrutement)->dossier == 4 ? 'selected' : '' }}>Dossier Validé</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        @php $prospere = optional($auditeur->recrutement)->prospere; @endphp
                        <form action="{{ route('recrutement.update', ['ecole' => $ecoleChoisie?->id, 'auditeur' => $auditeur->id_auditeur]) }}" method="POST">
                            @csrf @method('PUT')
                            <input type="hidden" name="prospere" value="{{ $prospere ? 0 : 1 }}">
                            <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                                {{ $prospere ? 'Annuler Prospère' : 'Prospère' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form action="#" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Détails Auditeur -->
<div x-show="showModal" @click.self="showModal = false" x-transition.opacity
     class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-[9999]">
    <div x-show="showModal" x-transition.scale
         class="bg-white rounded-2xl shadow-xl p-6 w-96 max-w-full relative z-[10000]">
        <button @click="showModal = false" class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-xl font-bold">×</button>
        <h2 class="text-lg font-semibold mb-3 text-center">Détails Auditeur</h2>
        <div class="space-y-2">
            <p><strong>Matricule:</strong> <span x-text="selectedAuditeur.Matricule"></span></p>
            <p><strong>Nom:</strong> <span x-text="selectedAuditeur.nom"></span></p>
            <p><strong>Prénoms:</strong> <span x-text="selectedAuditeur.prenoms"></span></p>
            <p><strong>Pays:</strong> <span x-text="selectedAuditeur.pays_residence"></span></p>
            <p><strong>Tel:</strong> <span x-text="selectedAuditeur.contact_tel"></span></p>
            <p><strong>Email:</strong> <span x-text="selectedAuditeur.mail"></span></p>

            <!-- Affichage conditionnel images -->
            <template x-if="selectedAuditeur.photo && selectedAuditeur.photo !== ''">
                <img :src="`/${selectedAuditeur.photo}`" alt="Photo Auditeur" class="w-full h-auto rounded-lg border mt-2 cursor-pointer" @click="showImageModal(`/${selectedAuditeur.photo}`, selectedAuditeur.Matricule)">
            </template>
            <template x-if="selectedAuditeur.extrait && selectedAuditeur.extrait !== ''">
                <p class="text-sm text-gray-600 cursor-pointer underline" @click="showImageModal(`/${selectedAuditeur.extrait}`, 'Extrait ' + selectedAuditeur.Matricule)">Voir Extrait</p>
            </template>
            <template x-if="selectedAuditeur.carte_nationalite && selectedAuditeur.carte_nationalite !== ''">
                <p class="text-sm text-gray-600 cursor-pointer underline" @click="showImageModal(`/${selectedAuditeur.carte_nationalite}`, 'Carte ' + selectedAuditeur.Matricule)">Voir Carte Nationalité</p>
            </template>
        </div>
    </div>
</div>

<!-- Modal Image -->
<div x-show="showImage" @click.self="showImage = false" x-transition.opacity
     class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-[10001]">
    <div class="bg-white p-4 rounded-lg shadow-lg max-w-lg w-full relative">
        <button @click="showImage = false" class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-xl font-bold">×</button>
        <h2 class="text-lg font-semibold mb-3 text-center" x-text="imageTitle"></h2>
        <img :src="imageSrc" alt="Image Auditeur" class="w-full h-auto rounded-lg border">
    </div>
</div>


<script>
function recrutementApp() {
    return {
        selectedFiliereId: null,
        selectedFiliereName: '',
        searchTerm: '',
        auditeurs: @json($auditeurs),
        showModal: false,
        selectedAuditeur: {},
        showImage: false,
        imageSrc: '',
        imageTitle: '',

        get filteredAuditeurs() {
            let list = this.auditeurs;
            if (this.selectedFiliereId) list = list.filter(a => a.classes?.some(c => c.id == this.selectedFiliereId));
            if (this.searchTerm) {
                const term = this.searchTerm.toLowerCase();
                list = list.filter(a =>
                    (a.nom && a.nom.toLowerCase().includes(term)) ||
                    (a.prenoms && a.prenoms.toLowerCase().includes(term)) ||
                    (a.Matricule && a.Matricule.toLowerCase().includes(term))
                );
            }
            return list;
        },

        selectClasse(id, name) {
            this.selectedFiliereId = id;
            this.selectedFiliereName = name;
        },

        openModal(auditeur) {
            this.selectedAuditeur = auditeur;
            this.showModal = true;
        },

        showImageModal(src, title) {
            this.imageSrc = src;
            this.imageTitle = title;
            this.showImage = true;
        },

        exportExcel() {
            const wb = XLSX.utils.book_new();
            const ws_data = [["Date","Matricule","Mot de passe","Centre","Nom","Prénoms","Pays","Tel","Email","Statut"]];
            this.filteredAuditeurs.forEach(a => {
                ws_data.push([
                    a.created_at ?? '', a.Matricule ?? '', a.mot_de_passe ?? '', a.centre ?? '', a.nom ?? '',
                    a.prenoms ?? '', a.pays_residence ?? '', a.contact_tel ?? '', a.mail ?? '', a.statut ?? 'Nouveau'
                ]);
            });
            const ws = XLSX.utils.aoa_to_sheet(ws_data);
            XLSX.utils.book_append_sheet(wb, ws, "Auditeurs");
            XLSX.writeFile(wb, "Recrutement_auditeurs.xlsx");
        },

        exportPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('p', 'mm', 'a4');
            doc.setFontSize(16);
            doc.setTextColor(41, 128, 185);
            doc.text("Liste des Auditeurs", 105, 15, { align: "center" });
            const columns = ["Date","Matricule","Mot de passe","Centre","Nom","Prénoms","Pays","Tel","Email","Statut"];
            const rows = this.filteredAuditeurs.map(a => [
                a.created_at ?? '', a.Matricule ?? '', a.mot_de_passe ?? '', a.centre ?? '', a.nom ?? '',
                a.prenoms ?? '', a.pays_residence ?? '', a.contact_tel ?? '', a.mail ?? '', a.statut ?? 'Nouveau'
            ]);
            doc.autoTable({ head: [columns], body: rows, startY: 25, styles: { fontSize: 9, cellPadding: 2, halign: 'center', valign: 'middle', overflow: 'linebreak', lineColor: [200,200,200], lineWidth: 0.1 }, headStyles: { fillColor: [41,128,185], textColor: 255, fontStyle: 'bold' }, alternateRowStyles: { fillColor: [240,248,255] }, footStyles: { fillColor: [41,128,185], textColor: 255 } });
            const pageCount = doc.internal.getNumberOfPages();
            for (let i = 1; i <= pageCount; i++) {
                doc.setPage(i);
                doc.setFontSize(8);
                doc.setTextColor(150);
                doc.text(`Page ${i} / ${pageCount}`, doc.internal.pageSize.getWidth() - 20, doc.internal.pageSize.getHeight() - 10, { align: "right" });
            }
            doc.save("Recrutement_auditeurs.pdf");
        }
    }
}
</script>





</div>

<!-- Scripts externes pour export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>




@endsection
